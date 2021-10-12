<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Validation\Validation;
    class UsersController extends AppController
    {
        public function login()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('Info');
                       $social=$this->Info->find('all')->toarray();
                       $this->set(compact('social'));
            if ($this->request->is('post')) {
               if (Validation::email($this->request->data['username'])) {
                   $this->Auth->config('authenticate', [
                       'Form' => [
                           'fields' => ['username' => 'email']
                       ]
                   ]);
                   $this->Auth->constructAuthenticate();
                   $this->request->data['email'] = $this->request->data['username'];
                   unset($this->request->data['username']);
               }
           
                   $user = $this->Auth->identify();
                   if($user){
                   if ($user['role']=='user') {
                       $this->Auth->setUser($user);
                       // return $this->redirect($this->Auth->redirectUrl());
                        return $this->redirect($this->Auth->redirectUrl('/Profile/index'));
                       }else{
                           $this->Flash->error(__('Invalid username or password, try again !'), ['key' => 'error']);
                       }
                   }else{
                    $this->Flash->error(__('Invalid username or password, try again !'), ['key' => 'error']);
                   }
               }
             }
             public function logout()
             {
                $this->Flash->smsalert(__('Successfully logout ! Thanks for visit '), ['key' => 'smsalert']);
                 return $this->redirect($this->Auth->logout());
             }
           
           
           
           
           
           
             public function forgotpassword(){
               $this->viewBuilder()->layout(false);
           }
           public function forgotpass(){
                   
               $this->autoRender=false;
               $this->loadModel('Users') ; 
            if($this->request->is('post')){
              //$customer_exist= $this->Users->exists(['mobile'=>$this->request->data['mobile']]); 
               $customer_exist= $this->Users->find('all')->select(['id'])->where(['username'=>$this->request->data['username']])->first();
             
              if($customer_exist){
               $myemail = $this->request->getData('username');
                
               $mytoken = Security::hash(Security::randomBytes(25));
               $users=$this->Users->find('all')->where(['username'=>$myemail])->first();
               $users['token']=$mytoken;
           
           
               if($this->Users->save($users)){
                   $this->Flash->success(__('Reset password link has been sent to your email ('.$myemail.'),Please check'), ['key' => 'success']);  
                   
                   Email::configTransport('imap.hostinger.in', [
                       'host' => 'smtp.hostinger.in',
                       'port' => 	587,
                       'username' => 'info@taxitourz.com',
                       'password' => '~FyJLOg7*',
                       'timeout' => 30,
                       'className' => 'Smtp'
                     ]);
           
                       $email = new Email('default');
                       $email -> transport('imap.hostinger.in');
                       $email -> emailFormat('html');
                       $email -> from('info@taxitourz.com','Taxitourz');
                       $email -> subject('Please confirm your reset password');
                       $email -> to($myemail);
                       $email -> send('Hello <br>'.$myemail.'<br/>Please click link below to reset your password<br/><br/><a href="https://bookkaaro.com/users/resetpassword/'.$mytoken.'">Reset Password</a>');
                       $this->redirect($this->referer());
               }
           
              }else{
           
           $this->Flash->error(__('This account is not register, Please check '), ['key' => 'error']);  
              $this->redirect($this->referer());
           }}}
    }
    
    

    