<?php
    namespace App\Controller;
    use App\Controller\AppController;

    class ProfileController extends AppController
    {
        public function index($id=null)
        {
           // pr ("Feedbackjcashkjh");die;
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));

            $this->loadModel('users');
            $users=$this->users->find('all')->where(['id'=>$this->Auth->user('id')])->first();
            $this->set(compact('users'));
           // pr ($users['id']);die;
            if($users['id']){
                
            if($this->request->is(['post','put'])){
                

                $patch=$this->users->patchEntity($users,$this->request->data);
                  //pr($patch); die;
                $this->users->save($patch);
                return $this->redirect(['controller'=>'Profile','action'=>'index']);
               }
            }
        }
        public function requirement()
        {
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
            if($this->request->is(['post','put'])){
                 pr($this->request->data); die;
            }
        }
        public function contacted()
        {
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
           
            $value="a";
            $Servic2we=$this->requirement->find('all')->toarray();
            
           pr($Servic2we); die;
            $this->loadModel('Farvourite');
            $this->loadModel('Propertylist');
            $this->loadModel('Propertyimages');
            $Farvourite1=$this->Farvourite->find('all')->where(['UserId'=>$this->Auth->user('id')])->toarray();
            
            foreach($Farvourite1 as $data){
                $SearchData1=$this->Propertylist->find('all')->contain(['Propertyimages'])->where(['id'=>$data['FarvouritePropertyId']])->toarray();
                $SearchData[]=$SearchData1;
            }
           $this->set(compact('SearchData'));
      
           $this->loadModel('Requirement');
           $Service=$this->Requirement->find('all')->where(['name'=>'ajay'])->toarray();
          // $Requirement= $this->Requirement->find('all')->where(['UserId'=>$this->Auth->user('id')])->toarray();
          pr($Service); die;
          foreach($Service as $data){
            
            if(!empty($data['location'])){
                $cond['Propertylist.location']=$location;
                }
                if(!empty($cond)){
                    $Array=$this->Propertylist->find('all')->contain(['Propertyimages'])->where($cond)->toarray();
                    $SearchData = json_decode(json_encode($Array), true); 
                    $connect1[]=$SearchData;   
                }
               
           }
          //$this->set(compact('connect1'));
      //  pr($connect1); die; 
        }
        public function feedback()
        {
    
        }

        public function help()
        {
            $this->loadModel('Info');
            $social=$this->Info->find('all')->toarray();
            $this->set(compact('social'));
        }
    }
        
    