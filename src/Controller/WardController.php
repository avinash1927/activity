<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ward Controller
 *
 * @property \App\Model\Table\WardTable $Ward
 * @method \App\Model\Entity\Ward[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ward = $this->paginate($this->Ward);

        $this->set(compact('ward'));
    }

    /**
     * View method
     *
     * @param string|null $id Ward id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ward = $this->Ward->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ward'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ward = $this->Ward->newEmptyEntity();
        if ($this->request->is('post')) {
            $ward = $this->Ward->patchEntity($ward, $this->request->getData());
            if ($this->Ward->save($ward)) {
                $this->Flash->success(__('The ward has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ward could not be saved. Please, try again.'));
        }
        $this->set(compact('ward'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ward id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ward = $this->Ward->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ward = $this->Ward->patchEntity($ward, $this->request->getData());
            if ($this->Ward->save($ward)) {
                $this->Flash->success(__('The ward has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ward could not be saved. Please, try again.'));
        }
        $this->set(compact('ward'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ward id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ward = $this->Ward->get($id);
        if ($this->Ward->delete($ward)) {
            $this->Flash->success(__('The ward has been deleted.'));
        } else {
            $this->Flash->error(__('The ward could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
