
<!--search_bar_start-->
<?=$this->element('Search');?>
<!--search-bar-end--> 

<!--menu_buy_start-->

<div class="menu_buy">
  <div class="container">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Buy</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Rent</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Pg</button>
        <button class="nav-link" id="nav-contact-tabPlot" data-bs-toggle="tab" data-bs-target="#nav-Plot" type="button" role="tab" aria-controls="nav-Plot" aria-selected="false">Plot</button>
        <button class="nav-link" id="nav-contact-tabComme" data-bs-toggle="tab" data-bs-target="#nav-Commercial" type="button" role="tab" aria-controls="nav-Commercial" aria-selected="false">Commercial</button>
      </div>
    </nav>
  </div>
</div>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="all_cont"> 
      <!--main_cart_start-->
       <?=$this->element('Buy');?>
      <!--main_cart_end--> 
     <!--renr_proparty_start-->
     <?=$this->element('Rent');?>
      <!--renr_proparty_end--> 
       <!--main_service_start-->
       <?=$this->element('Services');?>
      <!--main_service_end--> 
      
     <!--popular_Brands_start-->
          <?=$this->element('Brands');?>
      <!--popular_Brands_end--> 

         <!--image_and_text_start-->
      <?=$this->element('Hangouts');?>
        <!--image_and_text_start--> 
     
        <!--popular_start-->
        <?=$this->element('Shortcut');?>
        <!--popular_end--> 
        
     
    </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="all_cont"> 
      
      <!--renr_proparty_start-->
      <?=$this->element('Rent');?>
      <!--renr_proparty_end-->

      <!--main_cart_start-->
       <?=$this->element('Buy');?>
      <!--main_cart_end-->  
      
      <!--main_service_start-->
      <?=$this->element('Services');?>
      <!--main_service_end--> 
      <!--popular_hongout_start-->
      <?=$this->element('Brands');?>
      
      <!--popular_hongout_end--> 
      
      <!--image_and_text_start-->
      <?=$this->element('Hangouts');?>
   
      <!--image_and_text_start--> 
      
      <!--popular_start-->
      <?=$this->element('Shortcut');?>
      <!--popular_end--> 
      
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="all_cont"> 
      <!--main_cart_start-->
      <?=$this->element('PG');?>
      <!--main_cart_end--> 
      
      <!--renr_proparty_start-->
      <?=$this->element('Rent');?>
      <!--renr_proparty_end--> 
      
      <!--main_service_start-->
      <?=$this->element('Services');?>
      <!--main_service_end--> 
      <!--popular_hongout_start-->
      <?=$this->element('Brands');?>
      
      <!--popular_hongout_end--> 
      
      <!--image_and_text_start-->
      <?=$this->element('Hangouts');?>
   
      <!--image_and_text_start--> 
      
      <!--popular_start-->
      <?=$this->element('Shortcut');?>
      <!--popular_end--> 
      
    </div>
  </div>
  <div class="tab-pane fade" id="nav-Plot" role="tabpanel" aria-labelledby="nav-contact-tabPlot">
    <div class="all_cont"> 
       <!--main_cart_start-->
       <?=$this->element('Plot');?>
      <!--main_cart_end--> 
      
      <!--renr_proparty_start-->
      <?=$this->element('Rent');?>
      <!--renr_proparty_end--> 
      
      <!--main_service_start-->
      <?=$this->element('Services');?>
      <!--main_service_end--> 
      <!--popular_hongout_start-->
      <?=$this->element('Brands');?>
      
      <!--popular_hongout_end--> 
      
      <!--image_and_text_start-->
      <?=$this->element('Hangouts');?>
   
      <!--image_and_text_start--> 
      
      <!--popular_start-->
      <?=$this->element('Shortcut');?>
      <!--popular_end--> 
    </div>
  </div>
  <div class="tab-pane fade" id="nav-Commercial" role="tabpanel" aria-labelledby="nav-contact-tabComme">
    <div class="all_cont"> 
       <!--main_cart_start-->
       <?=$this->element('Commercial');?>
      <!--main_cart_end--> 
      
      <!--renr_proparty_start-->
      <?=$this->element('Rent');?>
      <!--renr_proparty_end--> 
      
      <!--main_service_start-->
      <?=$this->element('Services');?>
      <!--main_service_end--> 
      <!--popular_hongout_start-->
      <?=$this->element('Brands');?>
      
      <!--popular_hongout_end--> 
      
      <!--image_and_text_start-->
      <?=$this->element('Hangouts');?>
   
      <!--image_and_text_start--> 
      
      <!--popular_start-->
      <?=$this->element('Shortcut');?>
      <!--popular_end--> 
    </div>
  </div>
</div>
<!--menu_buy_end--> 