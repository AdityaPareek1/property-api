<!--profile_start--> 

<div class="profile">
<div class="container">

<ul>
<?= $this->Flash->render('smsalert'); ?>
<div class="main_pro">

	<div class="pro_im">
<figure><img src="<?php echo SITE_URL;?>images/profile.jpg" alt="profile"></figure>		
<div class="pro_detai">
<h3><?php echo $users['name'];?></h3>
<a href="mailto:Gourav@gmail.com"><?php echo $users['email'];?></a>
 <span><a href="tel:1234567890"><?php echo $users['username'];?></a>

	 </span>
</div>
	</div>
	
<span> 
	
	  <button href="<?php echo SITE_URL;?>Profile"  type="button" class="border-0 edit_profile" data-bs-toggle="modal" data-bs-target="#exampleModa2"><i class="fas fa-user-edit"></i></button>
    
              <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModa2Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa2Label">Etid profile</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    <?php echo $this->Form->create($users)?>
                     
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Name</label>
                              <?php echo $this->Form->input('name',array('placeholder'=>'Enter your Name','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Mobile</label>
                              <?php echo $this->Form->input('username',array('placeholder'=>'Enter your Name','class'=>'form-control','type'=>'text','label'=>false));  ?>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email</label>
                              <?php echo $this->Form->input('email',array('placeholder'=>'Enter your Name','class'=>'form-control','type'=>'text','label'=>false));  ?>
                            </div>
                          </div>
                        </div>
                     
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php echo $this->Form->end();?>
	
	</span>

	 
</div>
<?php	if($users['business'] == null){?>
<li><a href="<?php echo SITE_URL;?>ListProperty"><span><i class="fas fa-user-tie"></i></span>Add Property <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<?php }
else {
?>
<li><a href="<?php echo SITE_URL;?>ListProperty/myproperty"><span><i class="fas fa-user-tie"></i></span>My Property <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<?php } ?>
<li><a href="<?php echo SITE_URL;?>Profile/requirement"><span><i class="fas fa-user-tie"></i></span>My Requirements <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Profile/contacted"><span><i class="fas fa-user-tie"></i></span>Contacted Properties <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Farvourite/view"><span><i class="fas fa-user-tie"></i></span>Favourite Properties <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Profile/secheduled"><span><i class="fas fa-user-tie"></i></span>Secheduled Visits <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Profile/feedback"><span><i class="fab fa-facebook-f"></i></span>Feedback <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Profile/help"><span><i class="fas fa-hands-helping"></i></span>Help & Support <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="<?php echo SITE_URL;?>Users/logout"><span><i class="fas fa-sign-out-alt"></i></span>Log Out <span class="right_ar"><i class="fas fa-chevron-right"></i></span></a></li>
</ul>
</div>
</div>
  
<!--profile_End-->
