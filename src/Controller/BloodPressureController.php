<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BloodPressure Controller
 *
 * @property \App\Model\Table\BloodPressureTable $BloodPressure
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BloodPressureController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $condition = array();
        if ($this->request->is('post')) {
            $paramdata = $this->request->getData();
            if(isset($paramdata['date']) && $paramdata['date'] !='' && isset($paramdata['type']) && $paramdata['type'] !=''){
                $date = $paramdata['date'];
                $type = $paramdata['type'];
                $week = date("W", strtotime($date));
                $month = date("m", strtotime($date));
                $year = date('Y',strtotime($date));
                if(strtolower($type) == 'day'){
                    $from_date = date('Y-m-d',strtotime($date));
                    $to_date = date('Y-m-d',strtotime($date));
                    //$condition += array( 'date >=' => $from_date,'date <' => $to_date);
                }
                if(strtolower($type) == 'week'){
                    $date_string = $year . 'W' . sprintf('%02d', $week);
                    $from_date = date('Y-m-d', strtotime($date_string));
                    $to_date = date('Y-m-d', strtotime($date_string . '7'));
                }
                if(strtolower($type) == 'month'){
                    $first_day_this_month = date('01-'.$month.'-'.$year); 
                    $last_day_this_month  = date('t-'.$month.'-'.$year);
                    $from_date = date('Y-m-d',strtotime($first_day_this_month));
                    $to_date = date('Y-m-d',strtotime($last_day_this_month));
                }
                if(strtolower($type) == 'year'){
                    $from_date = date($year."-01-01", strtotime("-1 year"));
                    $to_date = date($year."-12-t", strtotime($from_date));
                }
                $condition = array("BloodPressure.date BETWEEN '" .$from_date. "' AND '".$to_date."'");

            }
            if($paramdata['user_id']!=''){
                $condition += array("BloodPressure.user_id"=>$paramdata['user_id']);
            }
        }
        if(strtolower($type) != 'day'){
            $this->paginate = [
                'fields'=>['Users.name','BloodPressure.date','first_value'=>'ROUND(avg(first_value))','second_value'=>'ROUND(avg(second_value))'],
                'contain' => ['Users'],
                'conditions'=>$condition,
                "group"=>['BloodPressure.date']
            ];
        }else{
            $this->paginate = [
                'contain' => ['Users','Watches'],
                'conditions'=>$condition,
            ];
        }

        // $query = $this->BloodPressure->find();
        // $query->select(['BloodPressure.date','avg_bloodPressure' => $query->func()->avg('BloodPressure.bloodPressure_value')]);
        // $bloodPressure = $query->group(['BloodPressure.date']);
        $bloodPressure = $this->paginate($this->BloodPressure);
        $this->set(compact('bloodPressure','from_date','to_date'));
    }

    /**
     * View method
     *
     * @param string|null $id Oxygen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bloodPressure = $this->BloodPressure->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('bloodPressure'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $bloodPressure = $this->BloodPressure->newEmptyEntity();
        if ($this->request->is('post')) {
            $bloodPressure = $this->BloodPressure->patchEntity($bloodPressure, $this->request->getData());
            $bloodPressure->date = date("Y-m-d",strtotime($this->request->getData('date')));
            if ($this->BloodPressure->save($bloodPressure)) {
                $bloodPressure->status = 1;
                $bloodPressure->message = 'Success';
                $res['status'] = 1;
                $res['message'] = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Oxygen'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                // if($bloodPressure->getErrors()){
                //     $errorMess = $bloodPressure->getErrors();
                //     print_r($errorMess);
                //     if(array_key_exists("mobile", $errorMess)){
                //         $bloodPressure->status = 2;
                //     }else if(array_key_exists("email", $errorMess)){
                //         $bloodPressure->status = 3;
                //     }else{
                        $bloodPressure->status = 0;
                //     }
                // }
                $bloodPressure->message = 'Fail';
                $res['status'] = 0;
                $res['message'] = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Oxygen'));
            }
        }
        // $watches = $this->BloodPressure->Watches->find('list', ['limit' => 200]);
        // $users = $this->BloodPressure->Users->find('list', ['limit' => 200]);
        $this->set($res);
    }


    /**
     * Edit method
     *
     * @param string|null $id Oxygen id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bloodPressure = $this->BloodPressure->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bloodPressure = $this->BloodPressure->patchEntity($bloodPressure, $this->request->getData());
            if ($this->BloodPressure->save($bloodPressure)) {
                $bloodPressure->status = 1;
                $bloodPressure->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Oxygen'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($bloodPressure->getErrors()){
                    $errorMess = $bloodPressure->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $bloodPressure->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $bloodPressure->status = 3;
                    }else{
                        $bloodPressure->status = 0;
                    }
                }
                $bloodPressure->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Oxygen'));
            }
        }
        $watches = $this->BloodPressure->Watches->find('list', ['limit' => 200]);
        $users = $this->BloodPressure->Users->find('list', ['limit' => 200]);
        $this->set(compact('bloodPressure', 'watches', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Oxygen id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bloodPressure = $this->BloodPressure->get($id);
        if ($this->BloodPressure->delete($bloodPressure)) {
            //$this->Flash->success(__('The {0} has been deleted.', 'Oxygen'));
            $bloodPressure->status = 1;
            $bloodPressure->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Oxygen'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $bloodPressure->message = 'Fail';
            $bloodPressure->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Oxygen'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
