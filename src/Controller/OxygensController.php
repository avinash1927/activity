<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Oxygens Controller
 *
 * @property \App\Model\Table\OxygensTable $Oxygens
 * @method \App\Model\Entity\Oxygen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OxygensController extends AppController
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
                    //$condition = ("date BETWEEN " .$from_date. " AND ".$to_date);
                    //$condition += array( 'date >=' => $from_date,'date <' => $to_date);
                }
                if(strtolower($type) == 'week'){
                    $date_string = $year . 'W' . sprintf('%02d', $week);
                    $from_date = date('Y-m-d', strtotime($date_string));
                    $to_date = date('Y-m-d', strtotime($date_string . '7'));
                }
                if(strtolower($type) == 'month'){
                    $first_day_this_month = date($month.'-01-'.$year); 
                    $last_day_this_month  = date($month.'-t-'.$year);
                    $from_date = date('Y-m-d',strtotime($first_day_this_month));
                    $to_date = date('Y-m-d',strtotime($last_day_this_month));
                }
                if(strtolower($type) == 'year'){
                    $from_date = date($year."-01-01", strtotime("-1 year"));
                    $to_date = date($year."-12-t", strtotime($from_date));
                }
            }
        }
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
            'conditions'=>$condition,
        ];
        $oxygens = $this->paginate($this->Oxygens);
        $this->set(compact('oxygens'));
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
        $oxygen = $this->Oxygens->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('oxygen'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $oxygen = $this->Oxygens->newEmptyEntity();
        if ($this->request->is('post')) {
            $oxygen = $this->Oxygens->patchEntity($oxygen, $this->request->getData());
            if ($this->Oxygens->save($oxygen)) {
                $oxygen->status = 1;
                $oxygen->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Oxygen'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($oxygen->getErrors()){
                    $errorMess = $oxygen->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $oxygen->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $oxygen->status = 3;
                    }else{
                        $oxygen->status = 0;
                    }
                }
                $oxygen->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Oxygen'));
            }
        }
        $watches = $this->Oxygens->Watches->find('list', ['limit' => 200]);
        $users = $this->Oxygens->Users->find('list', ['limit' => 200]);
        $this->set(compact('oxygen', 'watches', 'users'));
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
        $oxygen = $this->Oxygens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oxygen = $this->Oxygens->patchEntity($oxygen, $this->request->getData());
            if ($this->Oxygens->save($oxygen)) {
                $oxygen->status = 1;
                $oxygen->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Oxygen'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($oxygen->getErrors()){
                    $errorMess = $oxygen->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $oxygen->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $oxygen->status = 3;
                    }else{
                        $oxygen->status = 0;
                    }
                }
                $oxygen->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Oxygen'));
            }
        }
        $watches = $this->Oxygens->Watches->find('list', ['limit' => 200]);
        $users = $this->Oxygens->Users->find('list', ['limit' => 200]);
        $this->set(compact('oxygen', 'watches', 'users'));
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
        $oxygen = $this->Oxygens->get($id);
        if ($this->Oxygens->delete($oxygen)) {
            //$this->Flash->success(__('The {0} has been deleted.', 'Oxygen'));
            $oxygen->status = 1;
            $oxygen->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Oxygen'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $oxygen->message = 'Fail';
            $oxygen->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Oxygen'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
