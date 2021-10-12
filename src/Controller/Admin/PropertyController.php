<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    class PropertyController extends AppController
    {
        public function buy()
        {
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'sale'])->toarray();
            $Buy = json_decode(json_encode($Array), true);
            $this->set(compact('Buy'));
        }
        public function rent()
        {
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
                  //this section for rent property 
                  $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'rent'])->toarray();
                  $Rents = json_decode(json_encode($Array), true);
                  $this->set(compact('Rents'));
                  //end 
        }
        public function sale()
        {
    
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
           //this section for sale property 
            $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'sale'])->toarray();
            $Sales = json_decode(json_encode($Array), true);
            $this->set(compact('Sales'));
            //end 
        }
        public function pg()
        {
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
             //this section for rent property 
             $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'pg'])->toarray();
             $pg = json_decode(json_encode($Array), true);
             $this->set(compact('pg'));
            //end 
        }
        public function plot()
        {
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
            //this section for rent property 
           $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'plot'])->toarray();
           $plot = json_decode(json_encode($Array), true);
           $this->set(compact('plot'));
           //end 
        }
        public function commercial()
        {
            $this->loadModel('propertylist');
            $this->loadModel('Propertyimages');
             //this section for rent property 
             $Array=$this->propertylist->find('all')->contain(['Propertyimages'])->where(['property_sale_rent'=>'commercial'])->toarray();
             $Commercial = json_decode(json_encode($Array), true);
             $this->set(compact('Commercial'));
             //end Commercial
        }

        public function status($id,$status){
            $this->loadModel('Propertylist');
             $data=$this->Propertylist->get($id);
            $status1['status']= $status=='Y'?'N':'Y';
            $patch=$this->Propertylist->patchEntity($data,$status1);
            if($this->Propertylist->save($patch)){
                $this->redirect(['action'=>'buy']);
            }
          
              }
              public function verified($id,$verified)
              {
                $this->loadModel('Propertylist');
                $data=$this->Propertylist->get($id);
                $verified1['verified']= $verified=='yes'?'no':'yes';
                $patch=$this->Propertylist->patchEntity($data,$verified1);
                if($this->Propertylist->save($patch)){
                    $this->redirect(['action'=>'buy']);
                }
              }
    }
