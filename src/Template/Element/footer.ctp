<!--footer_start-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="footer_cont">
          <h5>Contact Detail</h5>
          <?php foreach ($social as $Social) {?>
          <ul class="cont_detail">          
            <li><span><i class="fas fa-map-marker-alt"></i></span><?php echo $Social['address'];?></li>
            <li><span><i class="fas fa-phone-alt"></i></span><a href="tel:0333-0144-151"><?php echo $Social['phone'];?></a></li>
            <li><span><i class="far fa-envelope"></i></span><a href="mailto:contact@mfins.co.uk"><?php echo $Social['email'];?></a></li>
          
          </ul>
          <ul class="social_icon_footer">
            <li><a href="<?php echo $Social['fb'];?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo $Social['gm'];?>"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="<?php echo $Social['tw'];?>"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo $Social['insta'];?>"><i class="fab fa-instagram"></i></a></li>
          </ul>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="footer_cont">
          <h5>About MF</h5>
          <ul>
            <li><a href="<?php echo SITE_URL;?>Pages/about">About</a></li>
            <li><a href="<?php echo SITE_URL;?>Pages/service">Services</a></li>
            <li><a href="#">Project</a></li>
            <li><a href="<?php echo SITE_URL;?>Pages/contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <p class="copy">© 2021 ALL RIGHTS RESERVED ! Developed By <a href="https://fivefreelancer.com/">fivefreelancer.com</a></p>
    </div>
  </div>
</footer>
<div class="scroll-to-top scroll-to-target" data-target="html" style=""> <a href="#"> <i class="fas fa-arrow-up"></i></a> </div>
<!--footer_end--> 
<script src="<?php echo SITE_URL;?>js/jquery.min.js"></script> 
<script src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script> 
<script src="<?php echo SITE_URL;?>js/all.min.js"></script> 
<script src="<?php echo SITE_URL;?>js/owl.carousel.min.js"></script> 
<script src="<?php echo SITE_URL;?>js/custom.js"></script>
</body>
</html>