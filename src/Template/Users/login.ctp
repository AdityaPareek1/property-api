
<!--Contact_end--> 
  
  
<div class="Contact_sec singiup">
<div class="container">
<h2>Singin</h2>
<?= $this->Flash->render('smsalert'); ?>
<?= $this->Flash->render('error'); ?>
<div class="row bg_contacts singin">
<div class="col-md-12">
<?= $this->Form->create() ?>
<div class="row">
  
<div class="col-md-12">
<div class="form-group">
<label>Mail ID / Mobile Number</label>
<input type="tel" name="username" class="form-control"
placeholder="Enter Your Mail ID / Number">
</div>
</div>
 

<div class="col-md-12">
<div class="form-group">
<label>Password</label>
<div class="input-group" id="show_hide_password">
<input class="form-control" name="password" type="password" placeholder="Enter Your Passsword">
<div class="input-group-addon">
<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
</div>
</div>
</div>	
</div>
	

<div class="col-md-12">
<div class="form-group text-center">
<button class="default_btn Contact_btn width">Singin</button>
</div>
</div>
</form>
 <p class="text-center m_bott">OR</p>
<div class="col-md-12">
<div class="form-group text-center">
<a href="<?php echo SITE_URL ?>Pages/otp" class="default_btn Contact_btn">Login With OTP</a>
</div>
</div>

<div class="col-md-12">
<div class="form-group text-center">
<a href="#">Forgot Password</a>
</div>
</div>
 
<div class="col-md-12">
<div class="form-group text-center">
<p>Don't Have Account</p>
<a href="<?php echo SITE_URL;?>Signup/index">Singnup</a>
</div>
</div>
 
</div>
</div>
</div>
</div>
</div>
<!--Contacts_start-->
