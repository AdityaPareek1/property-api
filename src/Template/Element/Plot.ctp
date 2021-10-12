 <!--main_cart_start-->
 <div class="main_cart plot">
        <div class="container">
          <div class="see_pro">
            <h2>Plot Proparty</h2>
            <a href="Plot">See All Proparty <i class="fas fa-arrow-right"></i></a> </div>
          <div class="owl-carousel owl-theme slider_home_sec">
            <?php foreach($plot as $Sale){?>

            <div class="item">
              <div class="card"> <a href="ListProperty/details/<?php echo $Sale['id']?>">
              <?php  foreach($Sale['propertyimages'] as $img)?>
                <figure> <img src="<?php echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="cart_3"> </figure>
                <?php ?>
                </a>
                <div class="card-body"><a href="ListProperty/details/<?php echo $Sale['id']?>"> <strong><?php echo $Sale['expectted_price'] ?></strong>
                  <p><?php echo $Sale['property_type']?></p>
                  <p class="card-text">Dimensions:<?php echo  $Sale['area']?> </p>
                  <p><?php echo  $Sale['location']?></p>
                  </a>
                  <div class="owner"><a href="ListProperty/details/<?php echo $Sale['id']?>"> </a><a href="ListProperty/details/<?php echo $Sale['id']?>" class="default_btn">Contact Now</a>
                    <p><span><?php echo  $Sale['type']?></span><?php echo  $Sale['name']?></p>
                  </div>
                </div>
              </div>
            </div>
         <?php }?>
      
          </div>
        </div>
      </div>