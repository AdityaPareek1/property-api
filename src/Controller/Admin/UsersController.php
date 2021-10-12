<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class UsersController extends AppController
    {
    
        public function login()
        {
            $this->viewBuilder()->layout(false);
            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                if($user){
                if ($user['role']=='admin') {
                    $this->Auth->setUser($user);
                     return $this->redirect($this->Auth->redirectUrl());
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
    }