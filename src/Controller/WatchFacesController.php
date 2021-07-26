<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;

/**
 * WatchFaces Controller
 *
 * @property \App\Model\Table\WatchFacesTable $WatchFaces
 * @method \App\Model\Entity\WatchFace[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WatchFacesController extends AppController
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
        $watchFaces = $this->paginate($this->WatchFaces);

        foreach ($watchFaces as $key => $watchFace):
            $watchFace->preview = ($watchFace->preview!='') ? Router::url('/', true)."watches/".$watchFace->preview : '';
            $watchFace->file = ($watchFace->file!='') ? Router::url('/', true)."watches/".$watchFace->file : '';
        endforeach;

        $this->set(compact('watchFaces'));
    }

    /**
     * View method
     *
     * @param string|null $id Watch Face id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $watchFace = $this->WatchFaces->get($id, [
            'contain' => ['Watches', 'Users'],
        ]);

        $this->set(compact('watchFace'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $watchFace = $this->WatchFaces->newEmptyEntity();
        if ($this->request->is('post')) {
            $watchFace = $this->WatchFaces->patchEntity($watchFace, $this->request->getData());

            $postFile = $this->request->getData('upload_file');
            if ($postFile->getClientFilename()!='') {
                $name = rand().$postFile->getClientFilename();
                
                $type = $postFile->getClientMediaType();
                $targetPath = WWW_ROOT. 'img'. DS . 'document'. DS. $name;
                if ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') {
                    if (!empty($name)) {
                        if ($postFile->getSize() > 0 && $postFile->getError() == 0) {
                            $postFile->moveTo($targetPath); 
                            $watchFace->upload_file = $name;
                        }
                    }
                }
            }else{
                unset($watchFace->upload_file);
            }

            if ($this->WatchFaces->save($watchFace)) {
                $this->Flash->success(__('The {0} has been saved.', 'Watch Face'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Watch Face'));
        }
        $watches = $this->WatchFaces->Watches->find('list', ['keyField' => 'id','valueField' => 'name','limit' => 200]);
        $users = $this->WatchFaces->Users->find('list', ['keyField' => 'id','valueField' => 'name','limit' => 200]);

        $this->set(compact('watchFace', 'watches', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Watch Face id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $watchFace = $this->WatchFaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $watchFace = $this->WatchFaces->patchEntity($watchFace, $this->request->getData());
            if ($this->WatchFaces->save($watchFace)) {
                $this->Flash->success(__('The {0} has been saved.', 'Watch Face'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Watch Face'));
        }
        $watches = $this->WatchFaces->Watches->find('list', ['limit' => 200]);
        $users = $this->WatchFaces->Users->find('list', ['limit' => 200]);
        $this->set(compact('watchFace', 'watches', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Watch Face id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $watchFace = $this->WatchFaces->get($id);
        if ($this->WatchFaces->delete($watchFace)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Watch Face'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Watch Face'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
