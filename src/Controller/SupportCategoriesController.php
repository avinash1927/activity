<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SupportCategories Controller
 *
 * @property \App\Model\Table\SupportCategoriesTable $SupportCategories
 * @method \App\Model\Entity\SupportCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupportCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $supportCategories = $this->paginate($this->SupportCategories);

        $this->set(compact('supportCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Support Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supportCategory = $this->SupportCategories->get($id, [
            'contain' => ['Supports'],
        ]);

        $this->set(compact('supportCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supportCategory = $this->SupportCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $supportCategory = $this->SupportCategories->patchEntity($supportCategory, $this->request->getData());
            if ($this->SupportCategories->save($supportCategory)) {
                $this->Flash->success(__('The support category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support category could not be saved. Please, try again.'));
        }
        $this->set(compact('supportCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Support Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supportCategory = $this->SupportCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supportCategory = $this->SupportCategories->patchEntity($supportCategory, $this->request->getData());
            if ($this->SupportCategories->save($supportCategory)) {
                $this->Flash->success(__('The support category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support category could not be saved. Please, try again.'));
        }
        $this->set(compact('supportCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Support Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supportCategory = $this->SupportCategories->get($id);
        if ($this->SupportCategories->delete($supportCategory)) {
            $this->Flash->success(__('The support category has been deleted.'));
        } else {
            $this->Flash->error(__('The support category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
