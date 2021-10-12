<!--Contact_end--> 
<div class="Contact_sec singiup">
  <div class="container">
    <h2>Singnup</h2>
    <div class="row bg_contacts singin">
      <div class="col-md-12">
    
<?php echo $this->Form->create();?>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Name</label>
 <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Mobile Number</label>
<input type="tel" name="username" class="form-control" placeholder="Enter Your Number">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Mail Id</label>
 <input type="email" name="email" class="form-control" placeholder="Enter Your Mail Id">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Password</label>
<div class="input-group" id="show_hide_password">
<input class="form-control" type="password" name="password" placeholder="Enter Your New Password">
<div class="input-group-addon">
<a href=""> <i class="fa fa-eye-slash" aria-hidden="true"></i></a>
</div>
</div>
</div>	
</div>
<div class="col-md-12">
<div class="form-group">
<label>Conform Password</label>
<div class="input-group" id="show_hide_password">
<input class="form-control" type="password" name="cpass" placeholder="Conform Password" >
<div class="input-group-addon">
<a href=""> <i class="fa fa-eye-slash" aria-hidden="true"></i></a>
</div>

</div>
</div>	
</div>
<div class="col-md-12">
<div class="form-group">
<button class="default_btn Contact_btn">Singnup Now</button></div>
</div>

<div class="col-md-12">
<div class="form-group aling_center">
 <p>Allready Have Your Account</p>
 <a href="<?php echo SITE_URL;?>Users/login">Signin</a>
</div>
</div>
</div>
<?php echo $this->Form->end();?>     
</div>
</div>
</div>
</div>
<!--Contacts_start-->