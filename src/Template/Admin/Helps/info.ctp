<section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            </div>
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Inquary Details
                                
                            </h2>
                          
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                  $cnt=1;
                  foreach($Help as $value){?>
                                    <tr>            
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $value['help_email'];?></td>
                                    <td><?php echo $value['help_address'];?></td>
                                    <td><?php echo $value['help_mobile'];?></td>
                    
                     <td>
                          <a href="<?php echo ADMIN_URL;?>Helps/edit/<?php echo $value['id']; ?>" class="btn btn-primary waves-effect">Edit</a></td>
                                    </tr>
                                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>