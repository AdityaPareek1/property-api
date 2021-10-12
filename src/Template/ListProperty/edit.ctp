
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Photos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <ul>
                       
                    <?php  foreach($data['propertyimages'] as $img) { ?>
                    <li><img src="<?php echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="popular_hongout_1"></li>
                    <?php } ?>
                     </ul>
                    </div>
              </div>
            </div>
           </div>
        </div>
      </div>