<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Event\Event;
    class RentController extends AppController
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
                $Rent=$this->propertylist->find('all')->where(['property_sale_rent'=>'rent','status'=>'Y'])->toarray();
               // pr($Rent);die;

                $this->set(compact('Rent'));

            }


    }