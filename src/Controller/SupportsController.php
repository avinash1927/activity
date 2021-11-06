<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Supports Controller
 *
 * @property \App\Model\Table\SupportsTable $Supports
 * @method \App\Model\Entity\Support[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupportsController extends AppController
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
            if($this->request->getData('user_id')!=''){
                $condition += array("Supports.user_id"=>$this->request->getData('user_id'));
            }
        }
        $this->paginate = [
            'contain' => ['SupportCategories', 'Users'],
            'conditions'=>$condition,
        ];
        $supports = $this->paginate($this->Supports);

        $this->set(compact('supports'));
    }

    /**
     * View method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $support = $this->Supports->get($id, [
            'contain' => ['SupportCategories', 'Users'],
        ]);

        $this->set(compact('support'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $support = $this->Supports->newEmptyEntity();
        if ($this->request->is('post')) {
            $support = $this->Supports->patchEntity($support, $this->request->getData());
            if ($this->Supports->save($support)) {
                $support->status = 1;
                $support->message = 'Success';
                $res['status'] = 1;
                $res['message'] = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'support'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($support->getErrors()){
                    $errorMess = $support->getErrors();
                }
                $support->status = 0;
                $support->message = 'Fail';
                $res['status'] = 0;
                $res['message'] = json_encode($errorMess);;
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Support'));
            }
        }
        $supportCategories = $this->Supports->SupportCategories->find('list', ['limit' => 200]);
        $users = $this->Supports->Users->find('list', ['limit' => 200]);
        // $this->set(compact('support', 'supportCategories', 'users'));
        $this->set($res);
    }

    /**
     * Edit method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res = array();
        $id = (!isset($id))?$this->request->getData('id'):$id;
        $support = $this->Supports->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $support = $this->Supports->patchEntity($support, $this->request->getData());
            if ($this->Supports->save($support)) {
                $support->status = 1;
                $support->message = 'Success';
                $res['status'] = 1;
                $res['message'] = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'support'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($support->getErrors()){
                    $errorMess = $support->getErrors();
                }
                $support->status = 0;
                $support->message = 'Fail';
                $res['status'] = 0;
                $res['message'] = json_encode($errorMess);;
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Support'));
            }
        }
        $supportCategories = $this->Supports->SupportCategories->find('list', ['limit' => 200]);
        $users = $this->Supports->Users->find('list', ['limit' => 200]);
        // $this->set(compact('support', 'supportCategories', 'users'));
        $this->set($res);
    }

    /**
     * Delete method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $support = $this->Supports->get($id);
        if ($this->Supports->delete($support)) {
            $this->Flash->success(__('The support has been deleted.'));
        } else {
            $this->Flash->error(__('The support could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
