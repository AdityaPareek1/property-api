<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class FarvouriteController extends AppController
    {
        public function index($id)
        {
            $data['UserId'] = $this->Auth->user('id');
            $data['FarvouritePropertyId'] = $id;
           $this->loadModel('Farvourite');
           $Farvourite1=$this->Farvourite->find('all')->where(['UserId'=>$this->Auth->user('id'),'FarvouritePropertyId'=>$id])->toarray();
           if($Farvourite1){
            $this->Flash->smsalert(__('Property already add Farvourite '), ['key' => 'smsalert']);
            return $this->redirect($this->referer());
           }else{
           $patch=$this->Farvourite->patchEntity($this->Farvourite->newEntity(),$data);
           if($this->Farvourite->save($patch)){
           $this->Flash->smsalert(__('SuccessFully add in Farvourite '), ['key' => 'smsalert']);
           return $this->redirect($this->referer());
           }
        }
        
        }
        public function view()
        {
            $this->loadModel('Farvourite');
            $this->loadModel('Propertylist');
            $this->loadModel('Propertyimages');
            $Farvourite1=$this->Farvourite->find('all')->where(['UserId'=>$this->Auth->user('id')])->toarray();
            foreach($Farvourite1 as $data){
                $SearchData1=$this->Propertylist->find('all')->contain(['Propertyimages'])->where(['id'=>$data['FarvouritePropertyId']])->toarray();
                $SearchData[]=$SearchData1;
            }
           $this->set(compact('SearchData'));
        }
    }