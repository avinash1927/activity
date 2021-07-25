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
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
        ];
        $steps = $this->paginate($this->Steps);

        $this->set(compact('steps'));
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
        $step = $this->Steps->newEmptyEntity();
        if ($this->request->is('post')) {
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
        $users = $this->Steps->Users->find('list', ['keyField' => 'id','valueField' => 'name','limit' => 200]);
        $this->set(compact('step', 'watches', 'users'));
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
