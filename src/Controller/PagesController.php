<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function about()
    {
        $this->viewBuilder()->layout('index');

        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
    }
    public function service()
    {
        $this->viewBuilder()->layout('index');
        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));

        $this->loadModel('Service');
        $Service=$this->Service->find('all')->where(['id'=>$id])->first();
        $this->set(compact('Service'));
    }

    public function contact()
    {
        $this->viewBuilder()->layout('index');

        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
    }
    public function feedback()
    {
        $this->viewBuilder()->layout('index');

        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
    }
    public function condition()
    {
        $this->viewBuilder()->layout('index');
        
        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
    }
    public function policy()
    {
        $this->viewBuilder()->layout('index');
        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));
    }
    public function otp()
    {
        $this->viewBuilder()->layout('index');
        $this->loadModel('Info');
        $social=$this->Info->find('all')->toarray();
        $this->set(compact('social'));

        if($this->request->is('post')){
            $this->loadModel('Users');
            $customer_exist= $this->Users->find('all')->select(['id'])->where(['username'=>$this->request->data['username']])->first();
            if($customer_exist){
                $mobile = $this->request->data['username'];
                  $ch = curl_init('http://2factor.in/API/V1/8e43209f-c3c0-11eb-8089-0200cd936042/SMS/'.$mobile.'/AUTOGEN');
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  $json = curl_exec($ch);
                  curl_close($ch);
                  $api_result = json_decode($json, true);
                //  pr($api_result);die;
                 $session_id=$api_result['Details'];
                 $number=$this->request->data['username'];
                  $this->set(compact('number','session_id'));
                }else{
                    $this->Flash->error(__('Number Wrong, Please check '), ['key' => 'error']); 
                   
                }
            }
        }
    
}


