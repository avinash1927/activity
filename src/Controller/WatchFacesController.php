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
        $condition = [];
        if($this->request->getData('watch_id')!=''){
            $condition += ['watch_id'=>$this->request->getData('watch_id')];
        }
        $this->paginate = [
            'contain' => ['Watches', 'Users'],
            "conditions"=>$condition,
            'limit'=>500,
            'maxLimit'=>500
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
            //$watchFace = $this->WatchFaces->patchEntity($watchFace, $this->request->getData());
            // if ($this->WatchFaces->save($watchFace)) {
            //     $this->Flash->success(__('The {0} has been saved.', 'Watch Face'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Watch Face'));

            $postFile = $this->request->getData('file');
            print_r($postFile);exit;
            if ($postFile->getClientFilename()!='') {
                $name = rand().$postFile->getClientFilename();
                $type = $postFile->getClientMediaType();
                $targetPath = WWW_ROOT. 'watches'. DS . $name;
                //if ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') {
                    if (!empty($name)) {
                        if ($postFile->getSize() > 0 && $postFile->getError() == 0) {
                            $postFile->moveTo($targetPath); 
                            $watchFace->file = $name;

                            if (($open = fopen($targetPath, "r")) !== FALSE) 
                              {
                                $text = '';
                                while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
                                {        
                                  $fileUrl = trim($data[1]);
                                  $file_name = basename(trim($fileUrl));
                                  $prevUrl = trim($data[2]);
                                  $prev_name = basename(trim($prevUrl));
                                  file_put_contents( WWW_ROOT. 'watches'. DS .$file_name,file_get_contents($fileUrl));
                                  file_put_contents( WWW_ROOT. 'watches'. DS .$prev_name,file_get_contents($prevUrl));
                                  $text .= "(".$data[0].",'".$prev_name."','".$file_name."'),";

                                  $requestData = $this->request->getData();
                                  $watchdata['watch_id'] = $requestData['watch_id'];
                                  $watchdata['user_id'] = $requestData['user_id'];
                                  $watchdata['preview'] = $file_name;
                                  $watchdata['file'] = $prev_name;
                                  $watchFace = $this->WatchFaces->patchEntity($watchFace, $watchdata);
                                  $this->WatchFaces->save($watchFace);
                                }
                                fclose($open);

                                $this->Flash->success(__('The {0} has been saved.', 'Watch Face'));
                                return $this->redirect(['action' => 'index']);
                              }

                        }
                    }
                //}
            }else{
                unset($watchFace->file);
            }
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
