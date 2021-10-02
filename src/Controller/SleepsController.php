<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sleeps Controller
 *
 * @property \App\Model\Table\SleepsTable $Sleeps
 * @method \App\Model\Entity\Sleep[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SleepsController extends AppController
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
                    $first_day_this_month = date($year.'-'.$month.'-01'); 
                    $last_day_this_month  = date($year.'-'.$month.'-t'); 
                    $from_date = date('Y-m-d',strtotime($first_day_this_month));
                    $to_date = date('Y-m-d',strtotime($last_day_this_month));
                }
                if(strtolower($type) == 'year'){
                    $from_date = date($year."-01-01", strtotime("-1 year"));
                    $to_date = date($year."-12-t", strtotime($from_date));
                }
                $condition = array("Sleeps.date BETWEEN '" .$from_date. "' AND '".$to_date."'");
            }
            if($paramdata['user_id']!=''){
                $condition += array("Sleeps.user_id"=>$paramdata['user_id']);
            }
        }
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
            'conditions'=>$condition
        ];
        $sleeps = $this->paginate($this->Sleeps);

        $this->set(compact('sleeps','from_date','to_date'));
    }

    /**
     * View method
     *
     * @param string|null $id Sleep id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sleep = $this->Sleeps->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('sleep'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $sleep = $this->Sleeps->newEmptyEntity();
        if ($this->request->is('post')) {
            $sleep = $this->Sleeps->patchEntity($sleep, $this->request->getData());
            $sleep->date = date("Y-m-d",strtotime($this->request->getData('date')));
            $exitData = $this->Sleeps->find('all', ['conditions'=>['Sleeps.date'=>date("Y-m-d", strtotime($this->request->getData('date'))),'user_id'=>$this->request->getData('user_id')]])->first();
            if(!$exitData){
                if ($this->Sleeps->save($sleep)) {
                    $sleep->status = 1;
                    $sleep->message = 'Success';
                    $res['status'] = 1;
                    $res['message'] = 'Success';
                    if($this->request->getData('from')!='mobile'){
                        $this->Flash->success(__('The {0} has been saved.', 'Sleep'));
                        return $this->redirect(['action' => 'index']);
                    }
                }else{
                    $sleep->status = 0;
                    $sleep->message = 'Fail';
                    $res['status'] = 0;
                    $res['message'] = 'Fail';
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sleep'));
                }
            }else{
                // $sleep = $this->Sleeps->get($exitData->id, [
                //     'contain' => []
                // ]);
                // $sleep = $this->Sleeps->patchEntity($sleep, $this->request->getData());
                // $sleep->date = date("Y-m-d",strtotime($this->request->getData('date')));
                // if ($this->Sleeps->save($sleep)) {
                //     $res['status'] = 1;
                //     $res['message'] = 'Updated';
                // }else{
                //     if($sleep->getErrors()){
                //         $errorMess = $sleep->getErrors();
                //         debug($errorMess);
                //     }
                //     $res['status'] = 0;
                //     $res['message'] = 'Update fail';
                // }

                $res['status'] = 0;
                $res['message'] = 'Already Exits';
            }
        }
        // $watches = $this->Sleeps->Watches->find('list', ['limit' => 200]);
        // $users = $this->Sleeps->Users->find('list', ['limit' => 200]);
        // $this->set(compact('sleep', 'watches', 'users'));
        $this->set($res);

    }


    /**
     * Edit method
     *
     * @param string|null $id Sleep id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sleep = $this->Sleeps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sleep = $this->Sleeps->patchEntity($sleep, $this->request->getData());
            if ($this->Sleeps->save($sleep)) {
                $this->Flash->success(__('The {0} has been saved.', 'Sleep'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sleep'));
        }
        $watches = $this->Sleeps->Watches->find('list', ['limit' => 200]);
        $users = $this->Sleeps->Users->find('list', ['limit' => 200]);
        $this->set(compact('sleep', 'watches', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Sleep id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sleep = $this->Sleeps->get($id);
        if ($this->Sleeps->delete($sleep)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Sleep'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Sleep'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
