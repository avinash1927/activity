<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Steps Controller
 *
 * @property \App\Model\Table\StepsTable $Steps
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StepsController extends AppController
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
                $condition = array("Steps.date BETWEEN '" .$from_date. "' AND '".$to_date."'");

            }

            if($paramdata['user_id']!=''){
                $condition += array("Steps.user_id"=>$paramdata['user_id']);
            }
        }
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
            'conditions'=>$condition,
        ];
        $steps = $this->paginate($this->Steps);
        $this->set(compact('steps','from_date','to_date'));
    }

    /**
     * View method
     *
     * @param string|null $id Step id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $step = $this->Steps->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('step'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $step = $this->Steps->newEmptyEntity();
        if ($this->request->is('post')) {
            $step = $this->Steps->patchEntity($step, $this->request->getData());
            $step->date = date("Y-m-d",strtotime($this->request->getData('date')));
            $exitData = $this->Steps->find('all', ['conditions'=>['Steps.date'=>date("Y-m-d", strtotime($this->request->getData('date'))),'stepscount'=>$this->request->getData('stepscount'),'user_id'=>$this->request->getData('user_id')]])->count();
            if(!$exitData){
                if ($this->Steps->save($step)) {
                    $res['status'] = 1;
                    $res['message'] = 'Success';
                    if($this->request->getData('from')!='mobile'){
                        $this->Flash->success(__('The {0} has been saved.', 'Step'));
                        return $this->redirect(['action' => 'index']);
                    };
                }else{
                    $res['status'] = 0;
                    $res['message'] = 'Fail';
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Step'));
                }
            }else{
                $res['status'] = 2;
                $res['message'] = 'Already Exits';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Step'));
            }
        }
        // $watches = $this->Steps->Watches->find('list', ['limit' => 200]);
        // $users = $this->Steps->Users->find('list', ['keyField' => 'id','valueField' => 'name','limit' => 200]);
        // echo json_encode($res);exit;
        $this->set($res);
    }


    /**
     * Edit method
     *
     * @param string|null $id Step id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $step = $this->Steps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $step = $this->Steps->patchEntity($step, $this->request->getData());
            if ($this->Steps->save($step)) {
                $step->status = 1;
                $step->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Step'));
                    return $this->redirect(['action' => 'index']);
                };
            }else{
                if($step->getErrors()){
                    $errorMess = $step->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $step->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $step->status = 3;
                    }else{
                        $step->status = 0;
                    }
                }
                $step->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Step'));
            }
        }
        $watches = $this->Steps->Watches->find('list', ['limit' => 200]);
        $users = $this->Steps->Users->find('list', ['limit' => 200]);
        $this->set(compact('step', 'watches', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Step id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $id = ($this->request->getData('id')!='')?$this->request->getData('id'):$id;
        $this->request->allowMethod(['post', 'delete']);
        $step = $this->Steps->get($id);
        if ($this->Steps->delete($step)) {
            $step->status = 1;
            $step->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Step'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $step->message = 'Fail';
            $step->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Step'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
