<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Event\Event;
    use Cake\Auth\DefaultPasswordHasher;
    class SignupController extends AppController
    {
        public function beforeFilter(Event $event)
        {
            $this->Auth->allow(['index']);
        }
        public function index()
        {
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
            $this->viewBuilder()->layout('index');

            if($this->request->is('post')){
               //pr($this->request->data); die;
                $this->loadModel('Users');
            $new=$this->Users->newEntity();
            $this->request->data['role']="user";
            $hasher = new DefaultPasswordHasher();
          $this->request->data['password']=$hasher->hash($this->request->data['password']);
         
          $patch=$this->Users->patchEntity($this->Users->newEntity(),$this->request->data);
           $this->Users->save($patch);
            $this->Flash->smsalert(__('SuccessFully Register ! Please Login '), ['key' => 'smsalert']);
            if($patch){
                $this->Auth->setUser($patch);
                return $this->redirect('/Profile/index');
                }
           // return $this->redirect(['controller'=>'Users','action'=>'login']);
                }
        }
    }