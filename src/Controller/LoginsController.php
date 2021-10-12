<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Event\Event;
    class LoginsController extends AppController
    {
      
        public function index()
        {
            $this->viewBuilder()->layout('index');
                
            
        }
        public function otpVerify()
        {
            $this->loadModel('Users') ;
            if($this->request->is('post')){
                $session_id=$this->request->data['session_id'];
                $digit1=$this->request->data['digit1'] ;
                $digit2=$this->request->data['digit2'] ;
                $digit3=$this->request->data['digit3'] ;
                $digit4=$this->request->data['digit4'] ;
                $digit5=$this->request->data['digit5'] ;
                $digit6=$this->request->data['digit6'] ;
                $otp= sprintf('%s%s%s%s%s%s', $digit1,$digit2,$digit3,$digit4,$digit5,$digit6);
              
                $ch = curl_init('http://2factor.in/API/V1/8e43209f-c3c0-11eb-8089-0200cd936042/SMS/VERIFY/'.$session_id.'/'.$otp);
                
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                $json = curl_exec($ch);
                curl_close($ch);
                
                $api_result = json_decode($json, true);
             
                if($api_result['Status']=='Success' && $api_result['Details']=='OTP Matched' ){
                    $Users=$this->Users->find('all')->select(['id'])->where(['username'=>$this->request->data['username']])->first();
                    // pr($Users['id']); die;
                    $this->request->data['id'] = $Users['id'];
                    $user = $this->Users->findById($this->request->getData()['id'])->first();
                    if($user){
                    $this->Auth->setUser($user);
      
                    return $this->redirect('/Profile/index');
                    
                    }
                }else{
                    $this->Flash->error(__('Invalid OTP ! Try again  '), ['key' => 'error']);
                    
                }
            
            }
        }
    }
    ?>