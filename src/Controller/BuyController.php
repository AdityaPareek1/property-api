<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Event\Event;
    class BuyController extends AppController
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

                $this->loadModel('propertylist');
                $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'sale','status'=>'Y'])->toarray();
                $Buy = json_decode(json_encode($Array), true);
                $this->set(compact('Buy'));

            }


    }