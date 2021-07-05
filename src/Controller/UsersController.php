<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $users = $this->paginate($this->Users);

        // $this->set(compact('users'));

        //$users = $this->Users->find()->where(['is_trash' => 0])->order(['id' => 'DESC']);
        $condition = array('is_trash' => 0);
        $this->paginate = array(
            'conditions'=>$condition,
            'order'=>array(
                'id'=>'DESC'
                ),
        );
        $users = $this->paginate($this->Users);
        // foreach ($users as $key => $user):
        //     $user->photo = ($user->photo!='') ? Router::url('/', true)."files/".$user->photo : '';
        // endforeach;
        $this->set(compact('users'));

    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {

                $user->status = 1;
                $user->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been saved.', 'User'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                if($user->getErrors()){
                    $errorMess = $user->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $user->status = 2;
                    }else if(array_key_exists("email", $errorMess)){
                        $user->status = 3;
                    }else{
                        $user->status = 0;
                    }
                }
                $user->message = 'Fail';
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $id = ($this->request->getData('id')!='')?$this->request->getData('id'):$id;
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $user->status = 1;
                $user->message = 'Success';
                if($this->request->getData('from')!='mobile'){
                    $this->Flash->success(__('The {0} has been updated.', 'User'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $user->message = 'Fail';
                $user->status = 0;
                $this->Flash->error(__('The {0} could not be updated. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        $query = $this->Users->query();
        $result = $query->update()
                    ->set(['is_trash' => '1'])
                    ->where(['id' => $id])
                    ->execute();

        if ($result) {
            $user->status = 1;
            $user->message = 'Success';
            if($this->request->getData('from')!='mobile'){
                $this->Flash->error(__('The {0} has been deleted.', 'User'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $user->message = 'Fail';
            $user->status = 0;
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function login()
    {
        if ($this->request->is('post')) {
            // debug($this->request->getData());
            // $user = $this->Auth->identify();
            // // debug($user);exit;
            // if ($user) {
            //     $this->Auth->setUser($user);
            //     return $this->redirect($this->Auth->redirectUrl());
            // }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        // return $this->redirect($this->Auth->logout());
    }

    public function loginMobile()
    {
         if ($this->request->is('post')) { 
            $res = array();
            $users = $this->Users->find('all', ['conditions'=>['Users.mobile'=>$this->request->getData('mobile')]])->first();

            if($users){
                $res['message'] = 'Users Available';
                $res['status'] = 1;
                $res['otp'] = '123456';
                $userData = $users->toArray();
                $users = $userData + $res;
            }else{
                $res['message'] = 'Users Not Available';
                $res['status'] = 0;
                $users = $res;
            }
        }

        $this->set(compact('users'));
    }
}
