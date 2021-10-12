<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Event\Event;
    class ListPropertyController extends AppController
    {
        public function index()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('propertyimages');
            if($this->request->is('post')){
                     $this->loadModel('propertylist');
                     $this->request->data['customer_id']=$this->Auth->user('id');
                 $new=$this->propertylist->newEntity();
                 //pr($new); die;
                 $patch=$this->propertylist->patchEntity($new,$this->request->data);
                 $patch['date_status'] = date('Y-m-d h:i:s');
                // pr($patch);die;
               if($this->propertylist->save($patch)){
                $this->loadModel('users');
  
                $users=$this->users->find('all')->where(['id'=>$this->Auth->user('id')])->first();   
               
                $users['business']="listed";
                
               // $business=$this->users->patchEntity($users);
              
              //pr($hello);die;
              
        
                if($this->users->save($users)){
                        $this->request->data['property_list_id']=$patch['id'];
                        $data = $this->request->getData(); 
             
                        $images = $data['files'];
                    foreach($images as $image) {
                         if(!empty($image['name'])) {    
                            $tmp=$image['tmp_name'];
                            $ext=pathinfo($image['name'],PATHINFO_EXTENSION);
                            $filename=uniqid().'.'.$ext;
                            $newpath='../webroot/PropertyImages/'.$filename;
                       
                            if(move_uploaded_file($tmp,$newpath)){
                               
                               $this->request->data['image']=$filename;
                               //pr($this->request->data['image']);die;
                             //  $this->request->data['customer_id']=$this->Auth->user('id');
                               $patch=$this->propertyimages->patchEntity($this->propertyimages->newEntity(),$this->request->data);
                               $this->propertyimages->save($patch);
                            }  
                         }}
                         $this->Flash->smsalert(__('Property Listed '), ['key' => 'smsalert']);
                         return $this->redirect(['controller'=>'Profile','action'=>'index']);         
                     
                 }
                }
             }
             $this->loadModel('Info');
             $social=$this->Info->find('all')->toarray();
             $this->set(compact('social'));
        }

        public function myproperty($id=null)
        {
        if($id){
         $this->loadModel('Propertyimages');
         $Rent=$this->Propertyimages->find('all')->where(['property_list_id'=>$id])->toarray();
         $this->set(compact('Rent'));
      //   pr($Rent);die;
        }
         $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
        
        $this->loadModel('Propertylist');
        $this->loadModel('Propertyimages');
        $this->set('data', $this->Propertyimages->find('all'));

        $Array=$this->Propertylist->find('all')->contain(['Propertyimages']);
        $Array = json_decode(json_encode($Array), true);
       
         foreach ($Array as $data) {
         $this->set(compact('data'));
         $this->set(compact('Array'));
         }
        //$data=$this->Propertyimages->find('all')->contain(['Propertylist']);
      //   $array=$this->Propertylist->find('all')->toarray();
      //   // foreach($array as $data){
      //   $data1=$this->Propertyimages->find('all')->toarray();
      //   // $data['images']=$data1;
      //   // }
      //   // $array = json_decode(json_encode($data), true);
      //   $this->set(compact('array'));
      //   $this->set(compact('data1'));
      //   //pr($data);die;
        
       // $this->set(compact('array'));
       
        }
        public function edit($id)
        {
         $this->set(compact('id'));
        }

        public function details($id)
        {
          $this->loadModel('Info');
          $social=$this->Info->find('all')->toarray();
          $this->set(compact('social'));
          $this->loadModel('Propertylist');
          $data=$this->Propertylist->find('all')->contain(['Propertyimages'])->where(['id'=>$id])->first();
          $this->set(compact('data'));
        }
      
    }
    