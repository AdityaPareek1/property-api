<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Event\Event;
    class BrandController extends AppController
    {
        public function beforeFilter(Event $event)
        {
            $this->Auth->allow(['index']);
        }
        public function index()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
            $this->loadModel('brands');
            $Array=$this->brands->find('all')->where(['status'=>'Y'])->toarray();
            $brands = json_decode(json_encode($Array), true);
            $this->set(compact('brands'));
        }
    }