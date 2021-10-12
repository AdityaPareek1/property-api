<!--profile_start--> 
 
 
<div class="main_cart partner_logo all_service">
        <div class="container">
          <div class="see_pro">
            <h5>Top Brands</h5>
          </div>
			<ul>
            <?php foreach($brands as $value){?>
			<li> <a href="#"><img src="<?php echo SITE_URL;?>brandImage/<?php echo $value['brandImage'] ?>" alt="partner_1"></a> </li>
            <?php } ?>	
			</ul>
	 
        </div>
      </div>
<!--profile_End-->