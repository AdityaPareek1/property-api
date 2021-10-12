<!--Connected_Properties_start-->
<div class="Connected_Properties proparty_details">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="Gallery sec_space"> 
          
          <!-- Scrollable modal --> 
          <!-- Button trigger modal -->
          <button type="button" class="img_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img class="img-fluid" src="<?php echo SITE_URL;?>images/cart_2.png" alt="cart_2"> </button>
          
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
                    <li><img src="<?php echo SITE_URL; ?>images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                    <li><img src="<?php echo SITE_URL; ?>images/popular_hongout_2.png" alt="popular_hongout_2"></li>
                    <li><img src="<?php echo SITE_URL; ?>images/popular_hongout_3.png" alt="popular_hongout_3"></li>
                    <li><img src="<?php echo SITE_URL; ?>images/popular_hongout_4.png" alt="popular_hongout_4"></li>
                    <li><img src="<?php echo SITE_URL; ?>images/popular_hongout_1.png" alt="popular_hongout_1"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <span>photos-5</span> </div>
      </div>
      <div class="col-md-9">
        <div class="cont_paroparty">
          <div class="hkflat">
            <div class="flat_cont">
              <?php if($data['verified']=="yes"){?>
              <div  class="Verified">
                <figure><img src="<?php echo SITE_URL; ?>images/right.png" alt="right"></figure>
                <p>Verified </p>
              </div>
              <?php } ?>
              <ul>
                <li>
                  <h5><?php echo $data['bhk'] ?>BHK <?php echo $data['property_type']?> <?php echo $data['area']?> Sqft </h5>
                  <?php echo $data['location'] ?></li>
                <li>
                  <h5><?php echo $data['expectted_price'] ?></h5>
                  <?php echo $data['expectted_price'] ?></li>
              </ul>
            </div>
            <div class="flat_cont sha_icon">
              <ul>
                <li>
                <a href="<?php echo SITE_URL; ?>ListProperty/details/<?php echo $data['id']?>" onclick="copyURI(event)"><span><i ids="test" class="fas fa-share"></i></span>Share</a></li>
              <script>
               function copyURI(evt) {
                  evt.preventDefault();
                  navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                     alert('Copy your propery link');
                  }, () => {
                    /* clipboard write failed */
                  });
              }
                </script>
                
              </form>
                <li><a href="<?php echo SITE_URL; ?>Farvourite/index/<?php echo $data['id']?>"><span><i class="fas fa-share-square"></i></span></a>Farvourite</li>
              </ul>
            </div>
          </div>
          <ul class="bed_sec">
            <li>Bedrooms<span><?php echo $data['bhk'] ?>BHK</span></li>
            <li>Bathroom<span><?php echo $data['bathrooms'] ?></span></li>
            <li>Balconies<span><?php echo $data['bathrooms'] ?> this is null</span></li>
          </ul>
          <ul class="bed_sec">
            <li>Super Area<span><?php echo $data['area']?> / Sqft <br></li>
          </ul>
          <ul class="bed_sec">
            <li>Status<span><?php echo $data['construcation_status']?> </span></li>
            <li>Transaction<span>New Property</span> </li>
            <li>Floor<span><?php echo $data['total_floores']?></span></li>
          </ul>
          <ul class="bed_sec bh_btn3">
            <li><a href="#" class="default_btn">Cantact Now</a></li>
            
            <!-- Popup_start -->
            <li>
              <button type="button" class="border_btn" data-bs-toggle="modal" data-bs-target="#exampleModa2"> Enquary Now </button>
              <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModa2Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa2Label"> Enquary Now</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php echo $this->Form->create('',array('url'=>array('controller'=>'Loginqqs','action'=>'otp_verify')));?>
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
                   
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </li>
            <!-- POpup_end -->
            
            <li><a href="#" class="default_btn">Download Brochure</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec">
          <div class="icon_info"> <span><i class="fas fa-share-square"></i></span>
            <ul>
              <li><strong>Save Property</strong></li>
              <li>Don't Want To Share Your Details With The Agent Right Now ?</li>
            </ul>
          </div>
          <a href="<?php echo SITE_URL; ?>Farvourite/index/<?php echo $data['id']?>" class="default_btn">Save Property For Later</a> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec">
          <div class="icon_info"> <span><img src="images/profile.jpg" alt="profile"></span>
            <ul>
              <li><strong>Agent</strong></li>
              <li>Gourav Prajapat</li>
              <li><a href="#">+91 1234567890</a></li>
              <li>Location: 85 a Kasturba Nagar Nieman Nagar Jaipur Rajasthan, 302012</li>
              <li><a href="#" class="border_btn">Properties For Sale</a></li>
              <li>12</li>
            </ul>
          </div>
          <a href="#" class="default_btn ">Contact Agent</a> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec">
          <div class="Description">
            <h6>Description</h6>
            <p>Search Properties by property type like flats, plots etc. Search property by property name, agent & owner name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent & owner name. Search by location. Search by Property ID.name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent & owner name. Search by location. Search by Property ID. <a href="#">MORE</a> </p>
            <div class="icon_info des_bor">
              <p>property by property name, agent & owner name. Search by location. Search by Property ID </p>
            </div>
            <div class="icon_info des_bor"> <span>Proce Beakup</span>
              <ul>
                <li>RS 2.5 Lac | RS 1,000 Monthly</li>
              </ul>
            </div>
            <div class="icon_info des_bor"> <span>Booking Amount</span>
              <ul>
                <li>RS 1.0 Lac</li>
              </ul>
            </div>
            <div class="icon_info des_bor"> <span>Facilities</span>
              <ul>
                <li>Search Properties by property type like flats, plots etc. Search property by property name, agent </li>
              </ul>
            </div>
            <div class="icon_info des_bor"> <span>Address</span>
              <ul>
                <li>Location: 85 a Kasturba Nagar Nieman Nagar Jaipur Rajasthan, 302012</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec">
          <div class="Description">
            <h6>Desclaimer</h6>
            <p>Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID. <a href="#">MORE</a> </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec prop_anata">
          <h6>Project details</h6>
          <div class="row">
            <div class="col-md-9">
              <div class="pro_name">
                <div class="icon_info widt_spa"> <span><img src="<?PHP echo SITE_URL; ?>images/profile.jpg" alt="profile"></span>
                  <ul>
                    <li><strong>Ananta</strong></li>
                    <li>Developet/Built By ARG GROUP</li>
                  </ul>
                </div>
                <div class="pro_name">
                  <div class="icon_info"> <span class="start_img"><strong>2.0</strong> <img src="<?PHP echo SITE_URL; ?>images/start_img.png" alt="start_img"></span> <a href="#Ra_re" class="default_btn">Write a review</a> </div>
                </div>
                <ul class="bed_sec all_info">
                  <li>Price<span>RS 25.0 Lac Onwards <br>
                    RS 3.124 Per Sqft</span></li>
                  <li>Configuration<span>2 BHK Flat</span></li>
                  <li>Tower & Unit Details<span>1 Tower, 600 Units</span></li>
                  <li>Status<span>Ready To More </span></li>
                  <li>Discussion Group<span>1 Postts 1 Members</span></li>
                </ul>
                <ul class="float_add">
                  <h6>Highlights</h6>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li><a href="#">MORE</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="compare Popular">
                <h6>Popular Project</h6>
                <ul class="float_add">
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                  <li>Main Tonk Road : 2.75 Km</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="deta_sec">
          <div class="Description form_se">
            <h6>Contact Owner</h6>
            <form>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="mail" name="mail" class="form-control" placeholder="Enter Your Email Id">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="Phone" class="form-control" placeholder="Enter Your Mobile No">
              </div>
              <p>I agree to Proparty</p>
              <a href="#" class="default_btn">Contact Now </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" id="Ra_re">
        <div class="deta_sec">
          <div class="Description form_se">
            <h6>Rating and Review</h6>
            <form>
              <figure class="sta"><img src="<?php echo SITE_URL; ?>images/start_img.png" alt="start_img"></figure>
              <div class="form-group">
                <label>Add Title</label>
                <input type="text" name="Name" class="form-control" placeholder="Add Title">
              </div>
              <div class="form-group">
                <label>Write Review</label>
                <textarea class="form-control" placeholder="Write Review"></textarea>
              </div>
              <p>I agree to Proparty</p>
              <a href="#" class="default_btn">Submit </a>
            </form>
            <div class="Rating_list">
              <div class="name_logo">
                <div class="agent_name">
                  <div class="codto_hili"> c </div>
                  <ul>
                    <li><strong>Crossworld Propertys</strong></li>
                    <li>Agent</li>
                  </ul>
                </div>
                <div class="rating_date">
                  <ul>
                    <li>
                      <figure><img src="images/start_img.png" alt="start_img"></figure>
                    </li>
                    <li>14/05/2021</li>
                  </ul>
                </div>
              </div>
              <h6>Search Properties by property type like flats, plots etc</h6>
              <p>Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID. <a href="#">MORE</a> </p>
            </div>
            <div class="Rating_list">
              <div class="name_logo">
                <div class="agent_name">
                  <div class="codto_hili"> p </div>
                  <ul>
                    <li><strong>Propertys</strong></li>
                    <li>Agent</li>
                  </ul>
                </div>
                <div class="rating_date">
                  <ul>
                    <li>
                      <figure><img src="<?php echo SITE_URL; ?>images/start_img.png" alt="start_img"></figure>
                    </li>
                    <li>14/05/2021</li>
                  </ul>
                </div>
              </div>
              <h6>Search Properties by property type like flats, plots etc</h6>
              <p>Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID.name. Search by location. Search by Property ID.Search Properties by property type like flats, plots etc. Search property by property name, agent &amp; owner name. Search by location. Search by Property ID. <a href="#">MORE</a> </p>
            </div>
            <div class="review"> <a href="all-review.html" class="default_btn">All Review</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="More_pro">
          <div class="see_pro">
            <h2>Similar Properties</h2>
            <a href="#">See All Proparty <i class="fas fa-arrow-right"></i> </a> </div>
          <div class="owl-carousel owl-theme slider_home_sec">
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="More_pro">
          <div class="see_pro">
            <h2>More Properties</h2>
            <a href="#">See All Proparty <i class="fas fa-arrow-right"></i> </a> </div>
          <div class="owl-carousel owl-theme slider_home_sec">
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="More_pro">
          <div class="see_pro">
            <h2>Top Properties</h2>
            <a href="#">See All Proparty <i class="fas fa-arrow-right"></i> </a> </div>
          <div class="owl-carousel owl-theme slider_home_sec">
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card"> <a href="#">
                <figure> <img src="images/cart_3.png" alt="cart_3"> </figure>
                </a>
                <div class="card-body"><a href="#"> <strong>Rs-10.5 Lac</strong>
                  <p>Residential Plot</p>
                  <p class="card-text">Dimensions: 6422 x 37 Yrd</p>
                  <p>Locality, pratap Nagar</p>
                  </a>
                  <div class="owner"><a href="#"> </a><a href="#" class="default_btn">Contact Now</a>
                    <p><span>Owner</span>Deepak Gupta</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Connected_Properties_end--> 