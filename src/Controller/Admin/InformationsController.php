<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class InformationsController extends AppController
    {
        public function add()
        {
            $this->viewBuilder()->layout('index');
            if($this->request->is('post')){
               // pr($this->request->data); die;
               $this->loadModel('Informations');
               //pr($Informations); die;
           $new=$this->Informations->newEntity();
           $patch=$this->Informations->patchEntity($new,$this->request->data);
           $this->Informations->save($patch);
           return $this->redirect(['controller'=>'Informations','action'=>'view']);
               }
        }
        public function view()
    {
        $this->viewBuilder()->layout('index');
        $this->loadModel('Informations');
        $Informations=$this->Informations->find('all')->toarray();
        // $this->set('user',$users);
        $this->set(compact('Informations'));
        // pr($users); die;
    }
    public function edit($id)
    {
        $this->viewBuilder()->layout('index'); 
        $this->loadModel('Informations');
        $Informations=$this->Informations->find('all')->where(['id'=>$id])->first();
      //   pr($user); die;
        // $this->set('user',$users);
       
        $this->set(compact('Informations'));
              if($this->request->is(['post','put'])){
                //pr($this->request->data); die;
          $patch=$this->Informations->patchEntity($Informations,$this->request->data);
          $this->Informations->save($patch);
          return $this->redirect(['controller'=>'Informations','action'=>'view']);
    }
    }
}