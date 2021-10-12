<!--Contact_end--> 
  
  
<div class="Contact_sec">
  <div class="container">
    <h2>Let us know how can I help you.</h2>
    <div class="row bg_contacts">
      <div class="col-md-12">
<form>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name</label>
 <input type="text" name="name" class="form-control" placeholder="Name">
</div>
</div>
 
 
<div class="col-md-6">
<div class="form-group">
<label>Email</label>
 <input type="Email" name="Email" class="form-control" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Message</label>
<textarea name="Enquiry" class="form-control" placeholder="Message"></textarea>
</div>
</div>
<div class="contact_sub">
<a href="#" class="default_btn Contact_btn">Send</a>
</div>	
	

 <p class="m_bott Company_deta">Contact Us:</p>
 <?php foreach ($social as $Social) {?>
 <ul class="company_deta">
 <li><span><i class="fas fa-map-marker-alt"></i></span>
	 <ul>
		 <li>Address</li>
		 <li><?php echo $Social['address']?></li>
	 </ul>
	 </li>
 <li><span><i class="fas fa-phone-alt"></i></span>
	 	 <ul>
		 <li>Phone</li>
		 <li><a href="tel:<?php echo $Social['phone']?>"><?php echo $Social['phone']?></a></li>
	 </ul>
	 </li>
 <li><span><i class="far fa-envelope"></i></span>
	 	 	 <ul>
		 <li>Email</li>
		 <li><a href="mailto:<?php echo $Social['email']?>"><?php echo $Social['email']?></a></li>
	 </ul>
	 </li>
 </ul>
	<?php } ?>
 </div>	

	
	
</form>
     
          
</div>
</div>
</div>
</div>
<!--Contacts_start-->