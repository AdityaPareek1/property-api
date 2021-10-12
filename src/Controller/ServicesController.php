<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class ServicesController extends AppController
    {
        public function index()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
            
            $this->loadModel('Service');
            $Service=$this->Service->find('all')->where(['status'=>'Y'])->toarray();
            $this->set(compact('Service'));
        }
    }
