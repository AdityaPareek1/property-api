<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class BrandsController extends AppController
    {
        public function add()
        {
            $this->loadModel('Brands');
            if($this->request->is('post')){
                //pr($this->request->data); die;
            
               $tmp = $this->request->data['brandImage']['tmp_name'];
               $ext=pathinfo($this->request->data['brandImage']['name'],PATHINFO_EXTENSION);
               $filename=uniqid().'.'.$ext;
               $newpath='../webroot/brandImage/'.$filename;
              
               if(move_uploaded_file($tmp,$newpath)){
                
                $this->request->data['brandImage']=$filename;
                $patch=$this->Brands->patchEntity($this->Brands->newEntity(),$this->request->data);
                $this->Brands->save($patch);
                return $this->redirect(['controller'=>'Brands','action'=>'view']);
               }
            }
       }
            public function view()
            {
              $this->viewBuilder()->layout('admin');
                $this->loadModel('Brands');
                $Brands=$this->Brands->find('all')->toarray();
                $this->set(compact('Brands'));
            }
            public function edit($id)
            {
                $this->loadModel('Brands');
                $Brands=$this->Brands->find('all')->where(['id'=>$id])->first();
                $this->set(compact('Brands'));
              if($this->request->is(['post','put'])){
                        //pr($this->request->data); die;
                        $tmp = $this->request->data['brandImage']['tmp_name'];
                        $ext=pathinfo($this->request->data['brandImage']['name'],PATHINFO_EXTENSION);
                        $filename=uniqid().'.'.$ext;
                        $newpath='../webroot/brandImage/'.$filename;
                       
                        if(move_uploaded_file($tmp,$newpath)){
                         
                         $this->request->data['brandImage']=$filename;
                         $patch=$this->Brands->patchEntity($Brands,$this->request->data);
                         $this->Brands->save($patch);
                         return $this->redirect(['controller'=>'Brands','action'=>'view']);
                        }
            }
}
            public function remove($id)
            {
                            $this->loadModel('Brands');
                            $Brands = $this->Brands->get($id);     
                            $oldpath="brandImage/".$Brands['brandImage'];
                              unlink($oldpath);
                            $Brands['brandImage']=$Brands['brandImage']='';
                            //pr($Users);die;
                            if($this->Brands->save($Brands)){    
                            return $this->redirect(['controller'=>'Brands','action'=>'edit/'.$id]);
                            }
                                }
                    public function delete(){
                      $data1=$this->Brands->get($this->request->data['id']);
                      if($this->Brands->delete($data1)){
                        $Brands=$this->Brands->find('all')->toarray();
                        $this->set(compact('Brands'));
                      }
                    }
                    public function update(){
     
                      // pr($this->request->data); die;
                      $data1=$this->Brands->get($this->request->data['id']);
                      $status=$this->request->data['status'];
                      $status1['status']= $status=='Y'?'N':'Y';
                      $patch=$this->Brands->patchEntity($data1,$status1);
                      if($this->Brands->save($patch)){
                        $data=$this->Brands->find('all')->toarray();
                        $this->set(compact('Brands'));
                        
                
                      }
                    }
                    
                }
