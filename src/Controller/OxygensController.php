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
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
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
