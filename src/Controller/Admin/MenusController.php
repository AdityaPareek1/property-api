<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class MenusController extends AppController
    
        {

            public function add()
            {
                $this->viewBuilder()->layout('index');
                $this->loadModel('Menus');
                 
                if($this->request->is('post')){
                     //pr($this->request->data); die;
                    $tmp=$this->request->data['dishimage']['tmp_name'];
                    $ext=pathinfo($this->request->data['dishimage']['name'],PATHINFO_EXTENSION);
                    $filename=uniqid().'.'.$ext;
                    $newpath='D:/xampp/htdocs/cakephp/webroot/dishimage/'.$filename;
                   
                    if(move_uploaded_file($tmp,$newpath)){
                     
                     $this->request->data['dishimage']=$filename;
                     $patch=$this->Menus->patchEntity($this->Menus->newEntity(),$this->request->data);
                     $this->Menus->save($patch);
                    
                     return $this->redirect(['controller'=>'Menus','action'=>'view']);
                     //$this->redirect(['action'=>'view']);
                    }
                
                    }
            }
            public function view()
            {
                $this->viewBuilder()->layout('index');
                $this->loadModel('Menus');
                        $Menus=$this->Menus->find('all')->toarray();
                        // $this->set('user',$users);
                        
                        $this->set(compact('Menus'));
            }
            public function status($id,$status)
                   
            {
            $this->loadModel('Menus');
            $Menu=$this->Menus->get($id);

            $status1['status']=$status=='Y'? 'N':'Y';
           
            $patch=$this->Menus->patchEntity($Menu,$status1);
            $this->Menus->save($patch);
           
            return $this->redirect(['controller'=>'Menus','action'=>'view']);
      
          }
        }

    