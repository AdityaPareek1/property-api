<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class SpecialtiesController extends AppController
    {
        public function add()
        {
            $this->viewBuilder()->layout('index');
            
            //pr($this->request->data); die;
           $this->loadModel('Specialties');
           if($this->request->is('post')){
                //pr($this->request->data); die;
               $tmp=$this->request->data['dishimage']['tmp_name'];
               $ext=pathinfo($this->request->data['dishimage']['name'],PATHINFO_EXTENSION);
               $filename=uniqid().'.'.$ext;
               $newpath='D:/xampp/htdocs/cakephp/webroot/dishimage/'.$filename;
              
               if(move_uploaded_file($tmp,$newpath)){
                
                $this->request->data['dishimage']=$filename;
                $patch=$this->Specialties->patchEntity($this->Specialties->newEntity(),$this->request->data);
                $this->Specialties->save($patch);
               
                return $this->redirect(['controller'=>'Specialties','action'=>'view']);
                //$this->redirect(['action'=>'view']);
               }
           
               }
               }
               public function view()
               {
                   $this->viewBuilder()->layout('index');
                   $this->loadModel('Specialties');
                   $Specialties=$this->Specialties->find('all')->toarray();
                   // $this->set('user',$users);
                   $this->set(compact('Specialties'));
                   //pr($Sliders); die;
               }
               public function status($id,$status)
               {
                $this->loadModel('Specialties');
                $Specialtie=$this->Specialties->get($id);

                $status1['status']=$status=='Y'? 'N':'Y';
                $patch=$this->Specialties->patchEntity($Specialtie,$status1);
                $this->Specialties->save($patch);
                return $this->redirect(['controller'=>'Specialties','action'=>'view']);
               }
               public function edit($id)
               {
                $this->viewBuilder()->layout('index'); 
                $this->loadModel('Specialties');
                $Specialtie=$this->Specialties->find('all')->where(['id'=>$id])->first();
            
                $this->set(compact('Specialtie'));
                if($this->request->is(['post','put'])){
                    
    
                 $patch=$this->Specialties->patchEntity($Specialtie,$this->request->data);
                 $this->Specialties->save($patch);
                 return $this->redirect(['controller'=>'Specialties','action'=>'view']);
                }

                }
                public function delete($id)
                {
                    $this->loadModel('Specialties');
                    $entity = $this->Specialties->get($id);
                    $result = $this->Specialties->delete($entity);
                  return $this->redirect(['controller'=>'Specialties','action'=>'view']);
        }
    }
    