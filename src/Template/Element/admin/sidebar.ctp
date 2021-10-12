<?php $authUser = ($this->request->Session()->read('Auth.User')); ?>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo ADMIN_URL;?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gorav Prajapati</div>
                    <div class="email">Property</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right"> 
                            <li><a href="<?php echo ADMIN_URL;?>Home/Changepassword"><i class="material-icons">group</i>Change Password</a></li>
                         
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo ADMIN_URL;?>Users/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo ADMIN_URL; ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    
                   
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_align_justify</i>
                            <span>Information</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Info/social">Social Links</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Info/basic">Basic Details</a>
                            </li>
                           
                        </ul>
                    </li>
                   
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_align_justify</i>
                            <span>Property</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Property/buy">Buy</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Property/rent">Rent</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Property/pg">Pg</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Property/plot">Plot</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Property/commercial">Commercial</a>
                            </li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Brands</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Brands/add">Add</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Brands/view">View</a>
                            </li>                         
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Service</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Service/add">Add</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Service/view">View</a>
                            </li>                         
                        </ul>
                    </li>
              
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Helps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Helps/message">Message</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Helps/info">Info</a>
                            </li>                         
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Review</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Review/add">Add</a>
                            </li>
                            <li>
                                <a href="<?php echo ADMIN_URL;?>Review/view">View</a>
                            </li>                         
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo ADMIN_URL;?>Inquary/View">
                            <i class="material-icons">assignment</i>
                            <span>Inquary Msg</span>
                        </a>                       
                    </li>

                    <li>
                        <a href="<?php echo ADMIN_URL;?>Feedback/View">
                            <i class="material-icons">assignment</i>
                            <span>Feedback</span>
                        </a>                       
                    </li>
               
                </ul>
            </div>
            <div>
            </div>
        
        </aside>
       
      