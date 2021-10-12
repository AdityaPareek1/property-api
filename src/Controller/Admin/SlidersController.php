<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class SlidersController extends AppController
    {
        public function add()
        {
            $this->viewBuilder()->layout('index');
            
                 //pr($this->request->data); die;
                $this->loadModel('Sliders');
                if($this->request->is('post')){
                     //pr($this->request->data); die;
                    $tmp=$this->request->data['sliderimg']['tmp_name'];
                    $ext=pathinfo($this->request->data['sliderimg']['name'],PATHINFO_EXTENSION);
                    $filename=uniqid().'.'.$ext;
                    $newpath='D:/xampp/htdocs/cakephp/webroot/sliderimg/'.$filename;
                   
                    if(move_uploaded_file($tmp,$newpath)){
                     
                     $this->request->data['sliderimg']=$filename;
                     $patch=$this->Sliders->patchEntity($this->Sliders->newEntity(),$this->request->data);
                     $this->Sliders->save($patch);
                    
                     return $this->redirect(['controller'=>'Sliders','action'=>'view']);
                     //$this->redirect(['action'=>'view']);
                    }
                
                    }
                    }
                    public function view()
                    {
                        $this->viewBuilder()->layout('index');
                        $this->loadModel('Sliders');
                        $Sliders=$this->Sliders->find('all')->toarray();
                        // $this->set('user',$users);
                        $this->set(compact('Sliders'));
                        //pr($Sliders); die;
                    }
                    public function status($id,$status)
                   
                    {
                    $this->loadModel('Sliders');
                    $Slider=$this->Sliders->get($id);
  
                    $status1['status']=$status=='Y'? 'N':'Y';
                   
                    $patch=$this->Sliders->patchEntity($Slider,$status1);
                    $this->Sliders->save($patch);
                   
                    return $this->redirect(['controller'=>'Sliders','action'=>'view']);
              
                  }
                    public function edit($id)
                   {
                    $this->viewBuilder()->layout('index'); 
                    $this->loadModel('Sliders');
                    $Slider=$this->Sliders->find('all')->where(['id'=>$id])->first();
                    //pr($Slider); die;
                  // $this->set('user',$users);

 
                    $this->set(compact('Slider'));
                    if($this->request->is(['post','put'])){
                        
        
                     $patch=$this->Sliders->patchEntity($Slider,$this->request->data);
                       //pr($patch); die;
                     $this->Sliders->save($patch);
                     return $this->redirect(['controller'=>'Sliders','action'=>'view']);
                    }

                    }
                    public function delete($id)
                    {
                        $this->loadModel('Sliders');
                        $entity = $this->Sliders->get($id);
                        $result = $this->Sliders->delete($entity);
                      return $this->redirect(['controller'=>'Sliders','action'=>'view']);
                    }
                    public function remove($id)
                   {
                    $this->loadModel('Sliders');
                      $this->Sliders->id = $id;
                   $this->Sliders->delete($this->request->Sliders('Sliders.sliderimg'));
                     return $this->redirect(['controller'=>'Sliders','action'=>'edit']);
                  
                  
                     //pr($Slider); die;
                    }
    }