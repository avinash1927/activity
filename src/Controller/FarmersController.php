<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Farmers Controller
 *
 * @property \App\Model\Table\FarmersTable $Farmers
 * @method \App\Model\Entity\Farmer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FarmersController extends AppController
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
        $farmers = $this->paginate($this->Farmers);

        $this->set(compact('farmers'));
    }

    /**
     * View method
     *
     * @param string|null $id Farmer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $farmer = $this->Farmers->get($id, [
            'contain' => ['Users', 'ApplicationFlows', 'CropOrder', 'CropOrderReceived', 'FarmerPlots', 'FarmerRecommendeds', 'FarmerVegitables', 'Harvest', 'PlotLocations', 'VwVegSaleReports'],
        ]);

        $this->set(compact('farmer'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $farmer = $this->Farmers->newEmptyEntity();
        if ($this->request->is('post')) {
            $farmer = $this->Farmers->patchEntity($farmer, $this->request->getData());
            if ($this->Farmers->save($farmer)) {
                $this->Flash->success(__('The {0} has been saved.', 'Farmer'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Farmer'));
        }
        $users = $this->Farmers->Users->find('list', ['limit' => 200]);
        $this->set(compact('farmer', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Farmer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $farmer = $this->Farmers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $farmer = $this->Farmers->patchEntity($farmer, $this->request->getData());
            if ($this->Farmers->save($farmer)) {
                $this->Flash->success(__('The {0} has been saved.', 'Farmer'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Farmer'));
        }
        $users = $this->Farmers->Users->find('list', ['limit' => 200]);
        $this->set(compact('farmer', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Farmer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $farmer = $this->Farmers->get($id);
        if ($this->Farmers->delete($farmer)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Farmer'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Farmer'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
