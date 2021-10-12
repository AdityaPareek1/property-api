
<div class="Contact_sec singiup">
<div class="container">
<h2>OTP</h2>
<?= $this->Flash->render('error'); ?>
<div class="row bg_contacts singin" >
<div class="col-md-12">
    
<?php echo $this->Form->create();?>
<div class="row">
  
<div class="col-md-12">
<div class="form-group">
<label>Mobile Number</label>
<input type="tel" name="username" class="form-control"
placeholder="Enter Your  Number">
</div>
</div>
<div class="col-md-12">
<div class="form-group text-center">
<button class="default_btn Contact_btn width">Singin</button>
</div>
</div>
</form>
</div>
<?php if(!empty($session_id)){?>
<div class=" text-center otp_sec">
<?php echo $this->Form->create('',array('url'=>array('controller'=>'Logins','action'=>'otp_verify')));?>
<div class="col-md-12">
<p>Enter your OTP to verify your mobile number.</p> 
<p>OTP sent on your mobile number <?php echo $number ?>.</p>
<div id="form" class="form-group"> 

 <input type="text" name="digit1" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="text" name="digit2" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="text" name="digit3" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="text" name="digit4" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="text" name="digit5" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="text" name="digit6" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
 <input type="hidden" name="session_id" value="<?php echo $session_id ?>"> 
 <input type="hidden" name="username" value="<?php echo $number ?>"> 
</div>
    
<button class="default_btn Contact_btn">Verify</button>
<p>Didn't get OTP yet</p>
<a href="#">Resend Otp</a>

</div>
</div>
</form>
<?php }?>
</div>
</div>

</div>
</div>
<!--Contacts_start-->

<div class="scroll-to-top scroll-to-target" data-target="html" style=""> <a href="#"> <i class="fas fa-arrow-up"></i></a> </div>
