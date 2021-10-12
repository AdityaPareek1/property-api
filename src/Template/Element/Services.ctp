<div class="main_service">
        <div class="container">
          <h2>Other Services</h2>
          <ul>
          <?php foreach($Service as $service){?>
            <li>
              <div class="service_cont"> <a href="#"><i class="fas fa-address-book"></i></a>
                <p><?php echo $service['projectName'] ?></p>
              </div>
            </li>
            <?php }?>
          </ul>
          <div class="or_cont"> <a href="Services" class="default_btn">See All service <i class="fas fa-arrow-right"></i> </a> </div>
        </div>
      </div>