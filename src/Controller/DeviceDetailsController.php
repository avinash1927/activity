<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DeviceDetails Controller
 *
 * @property \App\Model\Table\DeviceDetailsTable $DeviceDetails
 * @method \App\Model\Entity\DeviceDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeviceDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Watches'],
        ];
        $deviceDetails = $this->paginate($this->DeviceDetails);

        $this->set(compact('deviceDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Device Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deviceDetail = $this->DeviceDetails->get($id, [
            'contain' => ['Watches'],
        ]);

        $this->set(compact('deviceDetail'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deviceDetail = $this->DeviceDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $deviceDetail = $this->DeviceDetails->patchEntity($deviceDetail, $this->request->getData());
            if ($this->DeviceDetails->save($deviceDetail)) {
                $deviceDetail->status = 1;
                $deviceDetail->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Device Detail'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($deviceDetail->getErrors()){
                    $errorMess = $deviceDetail->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $deviceDetail->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $deviceDetail->status = 3;
                    }else{
                        $deviceDetail->status = 0;
                    }
                }
                $deviceDetail->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Device Detail'));
            }
        }
        $watches = $this->DeviceDetails->Watches->find('list', ['limit' => 200]);
        $this->set(compact('deviceDetail', 'watches'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Device Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deviceDetail = $this->DeviceDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deviceDetail = $this->DeviceDetails->patchEntity($deviceDetail, $this->request->getData());
            if ($this->DeviceDetails->save($deviceDetail)) {
                $deviceDetail->status = 1;
                $deviceDetail->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Device Detail'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($deviceDetail->getErrors()){
                    $errorMess = $deviceDetail->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $deviceDetail->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $deviceDetail->status = 3;
                    }else{
                        $deviceDetail->status = 0;
                    }
                }
                $deviceDetail->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Device Detail'));
            }
        }
        $watches = $this->DeviceDetails->Watches->find('list', ['limit' => 200]);
        $this->set(compact('deviceDetail', 'watches'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Device Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deviceDetail = $this->DeviceDetails->get($id);
        if ($this->DeviceDetails->delete($deviceDetail)) {
            $deviceDetail->status = 1;
            $deviceDetail->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Device Detail'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $deviceDetail->message = 'Fail';
            $deviceDetail->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Device Detail'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
