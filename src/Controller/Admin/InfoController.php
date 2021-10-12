<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class InfoController extends AppController
    {
        public function social()
        {
            
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
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
             return $this->redirect(['controller'=>'Info','action'=>'social']);
            }

            }


        public function basic()
        {
           
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
        }

        public function editbasic($id)
        {
           
            $this->loadModel('Info');
            $Info=$this->Info->find('all')->where(['id'=>$id])->first();
            


            $this->set(compact('Info'));
            if($this->request->is(['post','put'])){
                

             $patch=$this->Info->patchEntity($Info,$this->request->data);
               //pr($patch); die;
             $this->Info->save($patch);
             return $this->redirect(['controller'=>'Info','action'=>'basic']);
            }

            }

    }