<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class ServiceController extends AppController
    {
        public function add()
        {
            $this->loadModel('Service');
            if($this->request->is('post')){
                //pr($this->request->data); die;
            
               $tmp = $this->request->data['projectImage']['tmp_name'];
               $ext=pathinfo($this->request->data['projectImage']['name'],PATHINFO_EXTENSION);
               $filename=uniqid().'.'.$ext;
               $newpath='../webroot/projectImage/'.$filename;
              
               if(move_uploaded_file($tmp,$newpath)){
                
                $this->request->data['projectImage']=$filename;
                $patch=$this->Service->patchEntity($this->Service->newEntity(),$this->request->data);
                $this->Service->save($patch);
                return $this->redirect(['controller'=>'Service','action'=>'view']);
               }
            }
        }
        public function view()
        {
            $this->viewBuilder()->layout('admin');
            $this->loadModel('Service');
            $Service=$this->Service->find('all')->toarray();
            $this->set(compact('Service'));
        }
        public function edit($id)
        {
            $this->loadModel('Service');
            $Service=$this->Service->find('all')->where(['id'=>$id])->first();
            $this->set(compact('Service'));
          if($this->request->is(['post','put'])){
                   // pr($this->request->data); die;
                    $tmp = $this->request->data['projectImage']['tmp_name'];
                    $ext=pathinfo($this->request->data['projectImage']['name'],PATHINFO_EXTENSION);
                    $filename=uniqid().'.'.$ext;
                    $newpath='../webroot/projectImage/'.$filename;
                   
                    if(move_uploaded_file($tmp,$newpath)){
                     $this->request->data['projectImage']=$filename;
                   
                     $patch=$this->Service->patchEntity($Service,$this->request->data);
                     $this->Service->save($patch);
                     return $this->redirect(['controller'=>'Service','action'=>'view']);
                    }
        }
        }
        public function remove($id)
        {
                        $this->loadModel('Service');
                        $Service = $this->Service->get($id);     
                        $oldpath="projectImage/".$Service['projectImage'];
                          unlink($oldpath);
                        $Service['projectImage']=$Service['projectImage']='';
                        //pr($Users);die;
                        if($this->Service->save($Service)){    
                        return $this->redirect(['controller'=>'Service','action'=>'edit/'.$id]);
                        }
                            }

    }