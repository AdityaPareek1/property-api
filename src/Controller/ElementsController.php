<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class ElementsController extends AppController
    {
        public function edit($id)
        {
          
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
            
            $this->loadModel('Propertylist');
            $this->loadModel('Propertyimages');
            //$Array=$this->Propertylist->find('all')->contain(['Propertyimages']);
            $Array=$this->Propertyimages->find('all')->where(['property_list_id'=>$id])->toarray();
            $Array = json_decode(json_encode($Array), true);
           
             foreach ($Array as $data) {
             //$this->set(compact('data'));
             $this->set(compact('Array'));
             }
        }
    }