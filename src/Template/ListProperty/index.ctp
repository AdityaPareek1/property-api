
<!--Contact_start-->

<div class="Contact_sec singiup">
  <div class="container">
    <h2>Step-1</h2>
    <div class="row bg_contacts singin">
      <div class="col-md-12">
      <?php echo $this->Form->create('',array('enctype'=>'multipart/form-data','url'=>array('controller'=>'ListProperty')));?>
        <div class="owl-carousel owl-theme step_form">
      <div class="item">
           
            <div class="row">
            <div class="col-md-12 select_order">
            <p class="m_bott">Who Are You :</p>
          
              <div class="form-check">
                <input class="form-check-input" value="owner" type="radio" name="type" id="type">
                <label class="form-check-label" for="flexRadioDefault1"> Owner </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="agent" type="radio" name="type" id="type" checked>
                <label class="form-check-label" for="flexRadioDefault2"> Agent </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="builder" name="type" id="type" checked>
                <label class="form-check-label" for="flexRadioDefault3"> Builder </label>
              </div>
       
          </div>
        </div>
      
      </div>
      <div class="item">
       
          <div class="row">
            <div class="col-md-12">
              <p class="m_bott"> You Contact Details :</p>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="mobile" class="form-control" placeholder="Enter Your Mobile No">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Email</label>
                <input type="mail" name="email" class="form-control" placeholder="Enter Your Email Id">
              </div>
            </div>
          </div>
      
      </div>
      <div class="item">
       
          <div class="row">
            <div class="col-md-12">
              <p class="m_bott"> Let us Know About Your Proparty :</p>
              <p class="m_bott"> Your Proparty Type Group :</p>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                <p class="m_bott">Residential:</p>
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                <p class="m_bott">Commercial:</p>
                </button>
              </div>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p class="m_bott">Proparty Type :</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  name="property_type" id="property_type" value="Plot" checked="">
                        <label class="form-check-label" for="exampleRadios1">Plot </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Builder Plot" checked="">
                        <label class="form-check-label" for="exampleRadios2">Bluiders Plot</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="House" checked="">
                        <label class="form-check-label" for="exampleRadios3">House </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Villa" checked="">
                        <label class="form-check-labe4" for="exampleRadios1">Villa </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Plot" checked="">
                        <label class="form-check-label" for="exampleRadios5">plot </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Penthouse" checked="">
                        <label class="form-check-label" for="exampleRadios6">penthouse </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Studio Apartment" checked="">
                        <label class="form-check-label" for="exampleRadios7">Studio Apartment</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Pg/hostel" checked="">
                        <label class="form-check-label" for="exampleRadios8">PG/Hostel</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Service Apartment" checked="">
                        <label class="form-check-label" for="exampleRadios9">Service Apartment </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Farm House" checked="">
                        <label class="form-check-label" for="exampleRadios10">Farm House </label>
                      </div>
                    </div>
                    <p class="m_bott">BHK / Bedrooms :</p>
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bhk" id="bhk" value="1" checked="">
                        <label class="form-check-label" for="exampleRadios11">1</label>
                      </div>
                    </div>
                    <div class="col-md-3">  
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bhk" id="bhk" value="2" checked="">
                        <label class="form-check-label" for="exampleRadios12">2</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bhk" id="bhk" value="3" checked="">
                        <label class="form-check-label" for="exampleRadios13">3 </label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="bhk" id="bhk" value="4" checked="">
                        <label class="form-check-label" for="exampleRadios14">4</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Shop" checked="">
                        <label class="form-check-label" for="exampleRadios15">Shop </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Office Space" checked="">
                        <label class="form-check-label" for="exampleRadios16">Office Space</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Showroom" checked="">
                        <label class="form-check-label" for="exampleRadios17">Showroom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Office in IT Part / SEZ" checked="">
                        <label class="form-check-label" for="exampleRadios18">Office in IT Part / SEZ</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Warehouse / Godown" checked="">
                        <label class="form-check-label" for="exampleRadios19">Warehouse / Godown </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Commercial Land" checked="">
                        <label class="form-check-label" for="exampleRadios20">Commercial Land </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Industrial Land" checked="">
                        <label class="form-check-label" for="exampleRadios21">Industrial Land</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Agricultural Land" checked="">
                        <label class="form-check-label" for="exampleRadios22">Agricultural Land</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Industrial Building" checked="">
                        <label class="form-check-label" for="exampleRadios23">Industrial Building</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" id="property_type" value="Industrial Shed" checked="">
                        <label class="form-check-label" for="exampleRadios24">Industrial Shed</label>
                      </div>
                    </div>
                  </div>
                  <p class="m_bott">Area :</p>
                  <div class="area">
                    <ul>
                      <li>Area</li>
                      <li><input type="text" name="area"  id="area" class="form-control" placeholder="Exmple = 12-sqf "></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
      </div>
      <div class="item">
       
       <div class="row">
         <div class="col-md-12">
           <p class="m_bott">What Do You Want :</p>
     
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">  <p class="m_bott">Sale :</p></button>
</li>
<li class="nav-item" role="presentation">
 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">  <p class="m_bott">Rent :</p></button>
</li>

</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">         <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <p class="m_bott">Expectted Price :</p>
                     <input type="text" name="expectted_price" id="expectted_price" class="form-control" placeholder="Expectted Price">
                   </div>
                 </div>
                 <p class="m_bott">Construction Status :</p>
                 <div class="col-md-6">
           
         
         <div class="form-check">
                     <input class="form-check-input" type="radio" name="construcation_status" id="construcation_status" value="Redy To Move" checked="">
                     <label class="form-check-label" for="exampleRadios25">Redy To Move</label>
                   </div> 
         
                 </div>
                 <div class="col-md-6">
 
         
             <div class="form-check">
                     <input class="form-check-input" type="radio" name="construcation_status" id="construcation_status" value="Under Construcation" checked="">
                     <label class="form-check-label" for="exampleRadios26">Under Construction</label>
                   </div> 
         
                 </div>
               </div></div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
               <div class="row">
                 <p class="m_bott">Available From :</p>
                 <div class="col-md-6">
  
            
             <div class="form-check">
                     <input class="form-check-input" type="radio" name="available_form" id="available_form" value="Available From (Date)" checked="">
                     <label class="form-check-label" for="exampleRadios27">Available From (Date)</label>
                   </div> 
         
         
                 </div>
               </div></div>

</div>
</div>
          </div>
      
      </div>
			
			
			
			
			
			
      <div class="item">
       
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>BathRooms :</label>
                <select class="form-control form-select" name="bathrooms"  aria-label="Default select example">
                  <option selected value="1">1</option>
                  <option value="2" >2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Furnished Status :</label>
                <select class="form-control form-select" name="furnished_status" aria-label="Default select example">
                  <option selected value="Furnished">Furnished</option>
                  <option value="Not Furnished">Not Furnished</option>
                  
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Total Floors :</label>
                <select class="form-control form-select" name="total_floores" aria-label="Default select example">
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Floor Numbers :</label>
                <select class="form-control form-select" name="floor_number" aria-label="Default select example">
                  <option selectedvalue="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>
          </div>
      
      </div>
      <div class="item">
       
          <div class="row">
            <p class="m_bott">Uplod Your Properties Photos :</p>
            <div class="form-group Photo">
              <label for="exampleFormControlFile1">Add Photo</label>
              <?= $this->Form->input('files[]', ['type' => 'file', 'class' => 'file', 'multiple', 'label' => __('Select Images')]) ?>
            </div>
          </div>
          <div>
          <input type="hidden" name="proid" value=""> 
          </div>
          <div class="step_btn"> <button  class="default_btn">Submit</button> </div>
       
      </div>
      <?php echo $this->Form->end();?>
    </div>
  </div>
</div>
</div>
</div>
<!--Contacts_End--> 

