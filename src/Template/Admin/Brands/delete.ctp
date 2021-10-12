  <?php
      $cnt=1;
                 foreach($Brands as $Brand){?>
                <div class="col-lg-3 col-md-1 col-sm-8 col-xs-8 ">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo $Brand['brandName'];?></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);" class="delete"  data-id="<?php echo $Brand['id']; ?>">Delete</a></li>
                                        <li> <a href="<?php echo ADMIN_URL;?>Brands/edit/<?php echo $Brand['id'];?>">Edit</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php  echo SITE_URL;?>brandImage/<?php echo $Brand['brandImage'];?>" />
                                    </div>
                                </div>
                                <!-- Controls -->
                            </div>
                        </div>
                    </div>
                </div>
               <?php }?>
   
      
