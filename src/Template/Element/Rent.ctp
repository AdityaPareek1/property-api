<div class="main_cart">
        <div class="container">
          <div class="see_pro">
            <h2>Rent Proparty</h2>
            <a href="Rent">See All Proparty <i class="fas fa-arrow-right"></i></a> </div>
          <div class="owl-carousel owl-theme slider_home_sec">
          <?php foreach($Rents as $rent){?>
            <div class="item">
              <div class="card"> <a href="ListProperty/details/<?php echo $rent['id']?>">
              <?php  foreach($rent['propertyimages'] as $img)?>
                <figure> <img src="<?php  echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="cart_3"> </figure>
                <?php ?>
                </a>
                <div class="card-body"><a href="ListProperty/details/<?php echo $rent['id']?>"> <strong>Rs - <?php echo $rent['expectted_price'] ?></strong>
                  <p><?php echo $rent['property_type'] ?></p>
                  <p class="card-text">Dimensions: <?php echo  $rent['area']?></p>
                  <p><?php echo  $rent['location']?></p>
                  </a>
                  <div class="owner"><a href="ListProperty/details/<?php echo $rent['id']?>"> </a><a href="ListProperty/details/<?php echo $rent['id']?>" class="default_btn">Contact Now</a>
                    <p><span><?php echo  $rent['type']?></span><?php echo  $rent['name']?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>