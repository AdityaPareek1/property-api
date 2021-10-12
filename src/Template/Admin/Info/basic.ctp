<section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            </div>
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Property Basic Details
                                
                            </h2>
                          
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                        
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>address</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                  $cnt=1;
                  foreach($social as $value){?>
                                    <tr>
                                    <td><?php echo $cnt;?></td>
                   <td><?php echo $value['phone'];?></td>
                   <td><?php echo $value['email'];?></td>
                    <td><?php echo $value['address'];?></td>
                     <td>
                                        
                                        <a href="<?php echo ADMIN_URL;?>Info/editbasic/<?php echo $value['id']; ?>" class="btn btn-primary waves-effect">Edit</a></td>
                                    </tr>
                                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>