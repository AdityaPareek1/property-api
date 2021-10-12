 <div class="main_cart partner_logo">
        <div class="container">
          <div class="see_pro">
            <h2>Top Brands</h2>
          </div>
          <div class="owl-carousel owl-theme slider_home_sec">
          <?php foreach($brands as $value){?>
            <div class="item">
              <div class="card"> <a href="#"><img src="<?php echo SITE_URL;?>brandImage/<?php echo $value['brandImage'] ?>" alt="partner_1"></a> </div>
            </div>
            <?php } ?>
          </div>
          <div class="or_cont"> <a href="Brand" class="default_btn">See All brand <i class="fas fa-arrow-right"></i> </a> </div>
        </div>
      </div>
      