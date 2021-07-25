<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Goals Controller
 *
 * @property \App\Model\Table\GoalsTable $Goals
 * @method \App\Model\Entity\Goal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GoalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $goals = $this->paginate($this->Goals);

        $this->set(compact('goals'));
    }

    /**
     * View method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('goal'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $goal = $this->Goals->newEmptyEntity();
        if ($this->request->is('post')) {
            $goal = $this->Goals->patchEntity($goal, $this->request->getData());
            if ($this->Goals->save($goal)) {

                $goal->status = 1;
                $goal->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Goal'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($goal->getErrors()){
                    $errorMess = $goal->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $goal->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $goal->status = 3;
                    }else{
                        $goal->status = 0;
                    }
                }
                $goal->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Goal'));
            }
        }
        $users = $this->Goals->Users->find('list', ['keyField' => 'id','valueField' => 'name','limit' => 200]);
        $this->set(compact('goal', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $id = ($this->request->getData('id')!='')?$this->request->getData('id'):$id;
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goal = $this->Goals->patchEntity($goal, $this->request->getData());
            if ($this->Goals->save($goal)) {
                $goal->status = 1;
                $goal->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been updated.', 'Goal'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $user->message = 'Fail';
                $user->status = 0;
                $this->Flash->error(__('The {0} could not be updated. Please, try again.', 'Goal'));
            }
        }
        $users = $this->Goals->Users->find('list', ['limit' => 200]);
        $this->set(compact('goal', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $id = ($this->request->getData('id')!='')?$this->request->getData('id'):$id;
        $this->request->allowMethod(['post', 'delete']);
        $goal = $this->Goals->get($id);
        if ($this->Goals->delete($goal)) {
            $goal->status = 1;
            $goal->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Goal'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $user->message = 'Fail';
            $user->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Goal'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
