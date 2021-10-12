<div class="main_service all_service">
 <div class="container">
          <h5>All Services</h5>
          <ul>
          <?php foreach($Service as $value){?>
            <li>
              <div class="service_cont"> <a href="#"><img src="<?php echo SITE_URL;?>projectImage/<?php echo $value['projectImage'] ?>" </i></a>
                <p><?php echo $value['projectName']?></p>
              </div>
            </li>
            <?php } ?>	
          </ul>
 
        </div>
      </div>
	
<!--profile_End-->
