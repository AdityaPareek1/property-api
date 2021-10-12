<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Event\Event;
    class PropertyController extends AppController
    {
        public function beforeFilter(Event $event)
        {
            $this->Auth->allow(['addlist','index']);
        }
        public function index()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));

            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
           //this section for sale property 
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'sale','status'=>'Y'])->toarray();
            $Sales = json_decode(json_encode($Array), true);
            $this->set(compact('Sales'));
            //end 

            //this section for rent property 
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'rent','status'=>'Y'])->toarray();
            $Rents = json_decode(json_encode($Array), true);
            $this->set(compact('Rents'));
            //end 
            //this section for rent property 
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'pg','status'=>'Y'])->toarray();
            $pg = json_decode(json_encode($Array), true);
            $this->set(compact('pg'));
           //end 
           //this section for rent property 
           $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'plot','status'=>'Y'])->toarray();
           $plot = json_decode(json_encode($Array), true);
           $this->set(compact('plot'));
           //end 
            //this section for rent property 
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'commercial','status'=>'Y'])->toarray();
            $Commercial = json_decode(json_encode($Array), true);
            $this->set(compact('Commercial'));
            //end Commercial
              
               $this->loadModel('brands');
               $Array=$this->brands->find('all')->where(['status'=>'Y'])->toarray();
               $brands = json_decode(json_encode($Array), true);
               $this->set(compact('brands'));

                $this->loadModel('Service');
                $Service=$this->Service->find('all')->where(['status'=>'Y'])->toarray();
                $this->set(compact('Service'));
              
        }
    }