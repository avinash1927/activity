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
                $this->Flash->success(__('The {0} has been saved.', 'Goal'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Goal'));
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
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goal = $this->Goals->patchEntity($goal, $this->request->getData());
            if ($this->Goals->save($goal)) {
                $this->Flash->success(__('The {0} has been saved.', 'Goal'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Goal'));
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
        $this->request->allowMethod(['post', 'delete']);
        $goal = $this->Goals->get($id);
        if ($this->Goals->delete($goal)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Goal'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Goal'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
