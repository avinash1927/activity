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
        $condition = array('is_trash' => 0);
        if ($this->request->is('post')) {
            if($this->request->getData('id')!=''){
                $condition += array("Users.id"=>$this->request->getData('id'));
            }
        }
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
                if($user->getErrors()){
                    $errorMess = $user->getErrors();
                    if(array_key_exists("mobile", $errorMess)){
                        $user->status = 2;
                        $user->message = 'Mobile already exists';
                    }else if(array_key_exists("email", $errorMess)){
                        $user->status = 3;
                        $user->message = 'Email already exists';
                    }else{
                        $user->status = 0;
                        $user->message = 'Fail';
                    }
                }
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
        $id = ($this->request->getData('id')!='')?$this->request->getData('id'):$id;
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
                $user = $this->Users->newEmptyEntity();
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $res['message'] = 'Users Added';
                    $res['status'] = 1;
                    $res['otp'] = '123456';
                    $userData = $user->toArray();
                    $users = $userData + $res;
                }else{
                    $res['message'] = 'Users Not Available';
                    $res['status'] = 0;
                    $users = $res;
                }
                    
            }
        }

        $this->set(compact('users'));
    }

    public function getWeather()
    {
        if ($this->request->is('post')) {
            $this->loadModel('WeatherHistories');
            $exitsData = $this->WeatherHistories->find('all', [
                'conditions'=>['WeatherHistories.user_id'=>$this->request->getData('user_id'),"WeatherHistories.created > '".date('Y-m-d H:i:s',strtotime("-3 hours"))."'"],
                'order'=>['WeatherHistories.id'=>'desc']]
            )->first();
            if($exitsData){
                $data = $exitsData->weather;
            }else{
                $ch = curl_init('https://api.openweathermap.org/data/2.5/weather?lat='.$this->request->getData('latitude').'&lon='.$this->request->getData('longitude').'&appid=b12be9c967d1ca4b6d36a269ea292f01');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);
                $weatherHistories = $this->WeatherHistories->newEmptyEntity();
                $weatherHistories = $this->WeatherHistories->patchEntity($weatherHistories, array('user_id'=>$this->request->getData('user_id'),'weather'=>$data));
                if($this->WeatherHistories->save($weatherHistories)) {}
            }
            
             
            $data =  json_decode($data);
            $this->set(compact('data'));

        }
    }
}
