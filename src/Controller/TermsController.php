<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Terms Controller
 *
 * @property \App\Model\Table\TermsTable $Terms
 * @method \App\Model\Entity\Term[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TermsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $terms = $this->paginate($this->Terms);

        $this->set(compact('terms'));
    }

    /**
     * View method
     *
     * @param string|null $id Term id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $term = $this->Terms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('term'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $term = $this->Terms->newEmptyEntity();
        if ($this->request->is('post')) {
            $term = $this->Terms->patchEntity($term, $this->request->getData());
            if ($this->Terms->save($term)) {
                $term->status = 1;
                $term->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Term'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($term->getErrors()){
                    $errorMess = $term->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $term->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $term->status = 3;
                    }else{
                        $term->status = 0;
                    }
                }
                $term->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Term'));
            }
        }
        $this->set(compact('term'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Term id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $term = $this->Terms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $term = $this->Terms->patchEntity($term, $this->request->getData());
            if ($this->Terms->save($term)) {
                $term->status = 1;
                $term->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'Term'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($term->getErrors()){
                    $errorMess = $term->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $term->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $term->status = 3;
                    }else{
                        $term->status = 0;
                    }
                }
                $term->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Term'));
            }
        }
        $this->set(compact('term'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Term id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $term = $this->Terms->get($id);
        if ($this->Terms->delete($term)) {
            //$this->Flash->success(__('The {0} has been deleted.', 'Term'));
            $term->status = 1;
            $term->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'Term'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            //$this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Term'));
            $term->message = 'Fail';
            $term->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Term'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
