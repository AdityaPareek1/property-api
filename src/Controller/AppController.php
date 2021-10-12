<?php
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;
class AppController extends Controller
{

        public function initialize()
        {
            parent::initialize();
            //$this->loadComponent('RequestHandler');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
            $this->loadComponent('Flash');
            $this->loadComponent('Auth', [
               
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'logoutRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ]
                
            ]);
            
        }
        public function beforeFilter(Event $event)
{
    
    if (isset($this->request->params['prefix']) == 'admin') {
        if ($authUser = $this->Auth->user()) {
            $this->Auth->sessionKey='Auth.Admin';
            $this->viewBuilder()->layout('admin');
        }
    } else {
        $authUser = $this->Auth->user();
        $this->Auth->sessionKey ='Auth.user';
        $this->viewBuilder()->layout('index');
    }

    $this->Auth->allow(['otp','edit','login','search', 'otpVerify','otp_verify','about','contact','service','feedback','condition','policy']);
    $this->set(compact('authUser'));
}
}
