<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Heartrates Controller
 *
 * @property \App\Model\Table\HeartratesTable $Heartrates
 * @method \App\Model\Entity\Heartrate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HeartratesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
        ];
        $heartrates = $this->paginate($this->Heartrates);

        $this->set(compact('heartrates'));
    }

    /**
     * View method
     *
     * @param string|null $id Heartrate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $heartrate = $this->Heartrates->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('heartrate'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $heartrate = $this->Heartrates->newEmptyEntity();
        if ($this->request->is('post')) {
            $heartrate = $this->Heartrates->patchEntity($heartrate, $this->request->getData());
            if ($this->Heartrates->save($heartrate)) {
                $heartrate->status = 1;
                $heartrate->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Heartrate'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($heartrate->getErrors()){
                    $errorMess = $heartrate->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $heartrate->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $heartrate->status = 3;
                    }else{
                        $heartrate->status = 0;
                    }
                }
                $heartrate->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Heartrate'));
            }
        }
        $watches = $this->Heartrates->Watches->find('list', ['limit' => 200]);
        $users = $this->Heartrates->Users->find('list', ['limit' => 200]);
        $this->set(compact('heartrate', 'watches', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Heartrate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $heartrate = $this->Heartrates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $heartrate = $this->Heartrates->patchEntity($heartrate, $this->request->getData());
            if ($this->Heartrates->save($heartrate)) {
                $heartrate->status = 1;
                $heartrate->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Heartrate'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($heartrate->getErrors()){
                    $errorMess = $heartrate->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $heartrate->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $heartrate->status = 3;
                    }else{
                        $heartrate->status = 0;
                    }
                }
                $heartrate->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Heartrate'));
            }
        }
        $watches = $this->Heartrates->Watches->find('list', ['limit' => 200]);
        $users = $this->Heartrates->Users->find('list', ['limit' => 200]);
        $this->set(compact('heartrate', 'watches', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Heartrate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $heartrate = $this->Heartrates->get($id);
        if ($this->Heartrates->delete($heartrate)) {
            $heartrate->status = 1;
            $heartrate->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Heartrate'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $heartrate->message = 'Fail';
            $heartrate->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Heartrate'));
            return $this->redirect(['action' => 'index']);
        }

        return $this->redirect(['action' => 'index']);
    }
}
