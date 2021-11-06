<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Targets Controller
 *
 * @property \App\Model\Table\TargetsTable $Targets
 * @method \App\Model\Entity\Target[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TargetsController extends AppController
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
            if(isset($paramdata['training_date']) && $paramdata['training_date'] !='' && isset($paramdata['type']) && $paramdata['type'] !=''){
                $date = $paramdata['training_date'];
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
                $condition = array("Targets.training_date BETWEEN '" .$from_date. "' AND '".$to_date."'");

            }
            if($paramdata['user_id']!=''){
                $condition += array("Targets.user_id"=>$paramdata['user_id']);
            }
        }
        $this->paginate = [
            'contain' => ['Users'],
            'conditions'=>$condition,
        ];
        $targets = $this->paginate($this->Targets);

        $this->set(compact('targets','from_date','to_date'));
    }

    /**
     * View method
     *
     * @param string|null $id Target id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $target = $this->Targets->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('target'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $targets = $this->Targets->newEmptyEntity();
        if ($this->request->is('post')) {
            $targets = $this->Targets->patchEntity($targets, $this->request->getData());
            $targets->training_date = date("Y-m-d",strtotime($this->request->getData('training_date')));
            if ($this->Targets->save($targets)) {
                $targets->status = 1;
                $targets->message = 'Success';
                $res['status'] = 1;
                $res['message'] = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'targets'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($targets->getErrors()){
                    $errorMess = $targets->getErrors();
                }
                $targets->status = 0;
                $targets->message = 'Fail';
                $res['status'] = 0;
                $res['message'] = json_encode($errorMess);
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'targets'));
            }
        }
        $users = $this->Targets->Users->find('list', ['limit' => 200]);
        // $this->set(compact('targets', 'users'));
        $this->set($res);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Training id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $targets = $this->Targets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $targets = $this->Targets->patchEntity($targets, $this->request->getData());
            if ($this->Targets->save($targets)) {
                $this->Flash->success(__('The user training has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user training could not be saved. Please, try again.'));
        }
        $users = $this->Targets->Users->find('list', ['limit' => 200]);
        $this->set(compact('targets', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Training id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $targets = $this->Targets->get($id);
        if ($this->Targets->delete($targets)) {
            $this->Flash->success(__('The user training has been deleted.'));
        } else {
            $this->Flash->error(__('The user training could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
