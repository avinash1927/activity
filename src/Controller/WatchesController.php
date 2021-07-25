<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Watches Controller
 *
 * @property \App\Model\Table\WatchesTable $Watches
 * @method \App\Model\Entity\Watch[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WatchesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $watches = $this->paginate($this->Watches);

        $this->set(compact('watches'));
    }

    /**
     * View method
     *
     * @param string|null $id Watch id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $watch = $this->Watches->get($id, [
            'contain' => ['Steps', 'WatchFaces'],
        ]);

        $this->set(compact('watch'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $watch = $this->Watches->newEmptyEntity();
        if ($this->request->is('post')) {
            $watch = $this->Watches->patchEntity($watch, $this->request->getData());
            if ($this->Watches->save($watch)) {

                $watch->status = 1;
                $watch->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Watch'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($watch->getErrors()){
                    $errorMess = $watch->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $watch->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $watch->status = 3;
                    }else{
                        $watch->status = 0;
                    }
                }
                $watch->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Watch'));
            }
        }
        $this->set(compact('watch'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Watch id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $watch = $this->Watches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $watch = $this->Watches->patchEntity($watch, $this->request->getData());
            if ($this->Watches->save($watch)) {
                $watch->status = 1;
                $watch->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Watch'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($watch->getErrors()){
                    $errorMess = $watch->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $watch->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $watch->status = 3;
                    }else{
                        $watch->status = 0;
                    }
                }
                $watch->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Watch'));
            }
        }
        $this->set(compact('watch'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Watch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $watch = $this->Watches->get($id);
        if ($this->Watches->delete($watch)) {
            $watch->status = 1;
            $watch->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Watch'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $watch->message = 'Fail';
            $watch->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Watch'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
