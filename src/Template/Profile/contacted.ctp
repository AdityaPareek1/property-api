<!--Connected_Properties_start-->
<div class="Connected_Properties">
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">
        <p class="m_bott">Connected Properties :</p>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile" aria-selected="false">
        <p class="m_bott">Favourite properties :</p>
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade proparty_details  active show" id="home1" role="tabpanel" aria-labelledby="home-tab">
      <div class="row">
          <div class="col-md-3">
            <div class="Gallery sec_space"> 
              
              <!-- Scrollable modal --> 
              <!-- Button trigger modal -->
              <button type="button" class="img_btn" data-bs-toggle="modal" data-bs-target="#exampleModa4"> <img class="img-fluid" src="assets/images/cart_2.png" alt="cart_2"> </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModa4Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa4Label">All Photos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li><img src="assets/images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                        <li><img src="assets/images/popular_hongout_2.png" alt="popular_hongout_2"></li>
                        <li><img src="assets/images/popular_hongout_3.png" alt="popular_hongout_3"></li>
                        <li><img src="assets/images/popular_hongout_4.png" alt="popular_hongout_4"></li>
                        <li><img src="assets/images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                        <li><img src="assets/images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                        <li><img src="assets/images/popular_hongout_2.png" alt="popular_hongout_2"></li>
                        <li><img src="assets/images/popular_hongout_3.png" alt="popular_hongout_3"></li>
                        <li><img src="assets/images/popular_hongout_4.png" alt="popular_hongout_4"></li>
                        <li><img src="assets/images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                        <li><img src="assets/images/popular_hongout_4.png" alt="popular_hongout_4"></li>
                        <li><img src="assets/images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <span>photos-12</span> </div>
          </div>
          <div class="col-md-9">
            <div class="cont_paroparty"> <a href="#"> 2 BHK Builder Floor <span> for rent in Bhalswa </span>450 sqft </a>
              <p>m-srp-card__description js-content-read-more truncated m-srp-card__description__cgblock </p>
              <ul class="ren_se">
                <li>carpet area <strong>90 sqyrd</strong></li>
                <li>status <strong>Ready to Move</strong></li>
                <li>floor<strong>Ground out of 4 floors</strong></li>
                <li>transaction<strong>Resale</strong></li>
                <li>Furnishing<strong>Furnished</strong></li>
                <li>Facing<strong>East</strong></li>
                <li>Overlooking<strong>Garden/Park, Main Road</strong></li>
                <li>Bathroom<strong>2</strong></li>
              </ul>
              <ul class="details_btn">
                <li class="pase_rs">40.8 lac <span>3314 per sqft</span></li>
                <li><a href="#" class="default_btn">Contacts Agent</a></li>
                <li>
                  <button type="button" class="border_btn" data-bs-toggle="modal" data-bs-target="#exampleModad"> Enquary Now </button>
                  <div class="modal fade" id="exampleModad" tabindex="-1" aria-labelledby="exampleModadLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModadLabel"> Enquary Now</h5>
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

      <div class="tab-pane fade proparty_details" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
      <?php   foreach($SearchData as $data1)  foreach($data1 as $data){ ?>
      <div class="row">
          <div class="col-md-3">
            <div class="Gallery sec_space"> 
              <!-- Scrollable modal --> 
              <!-- Button trigger modal -->
              <?php foreach($data['propertyimages'] as $img){ ?>
              <button type="button" class="img_btn" data-bs-toggle="modal" data-bs-target="#exampleModa8"> <img class="img-fluid" src="<?php  echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="cart_2"> </button>
              <?php break;}?>
              <!-- Modal -->
              <div class="modal fade" id="exampleModa8" tabindex="-1" aria-labelledby="exampleModa8Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa8Label">All Photos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <ul>
                      <?php foreach($data['propertyimages'] as $img){  ?>
                        <li><img src="<?php  echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="popular_hongout_1"></li>
                        <?php   };?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <span>photos-12</span> </div>
          </div>
          <div class="col-md-9">
            <div class="cont_paroparty"> <a href="#"> 2 BHK Builder Floor <span> for rent in Bhalswa </span>450 sqft </a>
              <p>m-srp-card__description js-content-read-more truncated m-srp-card__description__cgblock </p>
              <ul class="ren_se">
                <li>carpet area <strong>90 sqyrd</strong></li>
                <li>status <strong>Ready to Move</strong></li>
                <li>floor<strong>Ground out of 4 floors</strong></li>
                <li>transaction<strong>Resale</strong></li>
                <li>Furnishing<strong>Furnished</strong></li>
                <li>Facing<strong>East</strong></li>
                <li>Overlooking<strong>Garden/Park, Main Road</strong></li>
                <li>Bathroom<strong>2</strong></li>
              </ul>
              <ul class="details_btn">
                <li class="pase_rs">40.8 lac <span>3314 per sqft</span></li>
                <li><a href="#" class="default_btn">Contacts Agent</a></li>
                <li>
                  <button type="button" class="border_btn" data-bs-toggle="modal" data-bs-target="#exampleModah"> Enquary Now </button>
                  <div class="modal fade" id="exampleModah" tabindex="-1" aria-labelledby="exampleModahLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModahLabel"> Enquary Now</h5>
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
        <?php }?>
      </div>
    </div>
  </div>
</div>
<!--Connected_Properties_end--> 