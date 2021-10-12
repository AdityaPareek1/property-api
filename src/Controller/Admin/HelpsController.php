<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class HelpsController extends AppController
    {

        public function message()
        {
            $this->loadModel('Help');
            $Help=$this->Help->find('all')->toarray();
            $this->set(compact('Help'));
        }

        public function info()
      {
        $this->loadModel('Info');
        $Help=$this->Info->find('all')->toarray();
        $this->set(compact('Help'));
      }

      public function edit($id)
        {
           
            $this->loadModel('Info');
            $Info=$this->Info->find('all')->where(['id'=>$id])->first();
            $this->set(compact('Info'));
            if($this->request->is(['post','put'])){
             $patch=$this->Info->patchEntity($Info,$this->request->data);
               //pr($patch); die;
             $this->Info->save($patch);
             return $this->redirect(['controller'=>'Helps','action'=>'info']);
            }
     }
    }    