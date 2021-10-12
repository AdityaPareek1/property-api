<!--Rent_1_start-->
<?php foreach($Buy as $Data){ ?>
<div class="proparty_details pro_list">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="Gallery sec_space"> 
          
          <!-- Scrollable modal --> 
          <!-- Button trigger modal -->
          <?php foreach($Data['propertyimages'] as $Property_images)?>
          <button type="button" class="img_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img class="img-fluid" src="<?php echo SITE_URL;?>PropertyImages/<?php echo $Property_images['image'];?>" alt="cart_2"> </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">All Photos</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <ul>
                  <?=$this->element('test');?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-9">
        <div class="cont_paroparty"> <a href="#"> <?php echo $Data['bhk'] ?> BHK Builder Floor <span> for  <?php echo $Data['property_sale_rent'] ?> in <?php echo $Data['location'] ?>  </span><?php echo $Data['property_sale_rent'] ?> in <?php echo $Data['area'] ?> sqft </a>
          <p><?php echo $Data['description'] ?></p>
          <ul class="ren_se">
            <li>carpet area <strong><?php echo $Data['area'] ?> sqyrd</strong></li>
            <li>status <strong><?php echo $Data['construcation_status'] ?></strong></li>
            <li>floor<strong>Ground out of <?php echo $Data['total_floores'] ?> floors</strong></li>
            <li>transaction<strong>Resale</strong></li>
            <li>Furnishing<strong><?php echo $Data['furnished_status'] ?></strong></li>
            <li>Facing<strong>East</strong></li>
            <li>Overlooking<strong><?php echo $Data['location'] ?></strong></li>
            <li>Bathroom<strong><?php echo $Data['bathrooms'] ?></strong></li>
          </ul>
          <ul class="details_btn">
            <li class="pase_rs"><?php echo $Data['expectted_price'] ?> lac <span> <?php echo $Data['area'] ?> per sqft</span></li>
            <li><a href="#" class="default_btn">Contacts Agent</a></li>
            <li>
              <button type="button" class="border_btn" data-bs-toggle="modal" data-bs-target="#exampleModa2"> Enquary Now </button>
              <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModa2Label" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa2Label"> Enquary Now</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Mobile</label>
                              <input type="tel" name="Phone" class="form-control" placeholder="Enter Your Mobile No">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="mail" name="mail" class="form-control" placeholder="Enter Your Email Id">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    </div>
</div>
<?php }?>