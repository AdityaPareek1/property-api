
<!--Contact_end--> 
  
  
<div class="Contact_sec">
  <div class="container">
    <h2>Let us know how can I help you.</h2>
    <div class="row bg_contacts">
      <div class="col-md-12">
      <?= $this->Flash->render('smsalert'); ?>
<?php echo $this->Form->create('',array('url'=>array('controller'=>'Inquary','action'=>'inquary')));?>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
 <input type="text" name="name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Enter Your Company Name</label>
<input type="text" name="company" class="form-control" placeholder="Company Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone</label>
<input type="tel" name="phone" class="form-control" placeholder="XXXX-XXXX-XXX">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email</label>
 <input type="Email" name="mail" class="form-control" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Enquiry</label>
<textarea name="inquary" class="form-control" placeholder="Enquiry"></textarea>
</div>
</div>
</div>	
<div class="contact_sub">
<button class="default_btn Contact_btn">Submit</button>
</div>		
<?php echo $this->Form->end();?>
<map>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28489.378513692638!2d75.80813109317889!3d26.80264142318585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc98e1f33788b%3A0x9a2730f2d96e4e45!2sPratap%20Nagar%2C%20Jaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1617205832309!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</map>       
          
</div>
</div>
</div>
</div>
<!--Contacts_start-->

