<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class SearchController extends AppController
    {
        public function search()
        {
            $this->viewBuilder()->layout('index');
            $this->loadModel('Propertylist') ; 

       // pr($this->request->data);die;
            extract($this->request->data);
        
            if(!empty($propertyType)){
            $cond['Propertylist.property_type']=$propertyType;
            }else{
                if(!empty($Budget)){
                    $cond['expectted_price >=']=$Budget;
                   // pr($cond); 
                }else{
                    $SearchData =$this->request->data["Not Found"]="404"; 
                }
                $SearchData =$this->request->data["Not Found"]="404";
            }

            if(!empty($cond)){
                $Array=$this->Propertylist->find('all')->contain(['Propertyimages'])->where($cond)->toarray();
                $SearchData = json_decode(json_encode($Array), true);    
            } else{
                $SearchData=$this->Propertylist->find('all')->contain(['Propertyimages'])->toarray();

            }
            // if(!empty($search_term)){
            //    // $cond['Property_list.property_type ' 'Property_list.area'] =$search_term;
            //     }
            // $this->set(compact('plot'));
            // $SearchData=$this->Propertylist->find('all')->where($cond)->toarray();
            $this->set(compact('SearchData'));
                $this->loadModel('Info');
                $social=$this->Info->find('all')->toarray();
                $this->set(compact('social'));
        }
        }
    