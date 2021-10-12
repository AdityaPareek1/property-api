<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    use Cake\Event\Event;
    use Cake\Auth\DefaultPasswordHasher;
    class AdminController extends AppController
  {
    public function index()
        {
          $this->viewBuilder()->layout(false);
          $this->viewBuilder()->layout('index');
        }
        public function add()
        {
        // echo "add"; die;
     
$this->viewBuilder()->layout('index');
if($this->request->is('post')){
     //pr($this->request->data); die;
    $this->loadModel('Users');
    
    $hasher = new DefaultPasswordHasher();
    $this->request->data['password']=$hasher->hash($this->request->data['password']);
$new=$this->Users->newEntity();
$patch=$this->Users->patchEntity($new,$this->request->data);
$this->Users->save($patch);
return $this->redirect(['controller'=>'Admin','action'=>'view']);
    }
        }
    public function view()
    {
      $this->viewBuilder()->layout('index'); 
      $this->loadModel('Users');
      $users=$this->Users->find('all')->toarray();
      // $this->set('user',$users);
      $this->set(compact('users'));
      // pr($users); die;

    }
    public function edit($id)
    {
//   echo $id; die;
$this->viewBuilder()->layout('index'); 
  $this->loadModel('Users');
  $user=$this->Users->find('all')->where(['id'=>$id])->first();
//   pr($user); die;
  // $this->set('user',$users);
 
  $this->set(compact('user'));
        if($this->request->is(['post','put'])){
        
    $patch=$this->Users->patchEntity($user,$this->request->data);
    $this->Users->save($patch);
    return $this->redirect(['controller'=>'Admin','action'=>'view']);
    }

  }
public function status($id,$status)
{
  $this->loadModel('Users');
    $user=$this->Users->get($id);
  
    $status1['status']=$status=='Y'? 'N':'Y';
    $patch=$this->Users->patchEntity($user,$status1);
    $this->Users->save($patch);
    return $this->redirect(['controller'=>'Admin','action'=>'view']);
}
public function delete($id)
{
$this->loadModel('Users');
  $entity = $this->Users->get($id);
  $result = $this->Users->delete($entity);
return $this->redirect(['controller'=>'Admin','action'=>'view']);
}
}
        
  
      
    