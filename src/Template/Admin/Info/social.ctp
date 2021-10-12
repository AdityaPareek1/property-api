


            <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            </div>
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Property Social Details
                                
                            </h2>
                          
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                        
                                        <th>FaceBook</th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                       <th>Gmail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                  $cnt=1;
                  foreach($social as $value){?>
                                    <tr>
                                    <td><?php echo $cnt;?></td>
                   <td><?php echo $value['fb'];?></td>
                   <td><?php echo $value['tw'];?></td>
                    <td><?php echo $value['insta'];?></td>
                    <td><?php echo $value['gm'];?></td>
                     <td>
                                        
                                        <a href="<?php echo ADMIN_URL;?>Info/edit/<?php echo $value['id']; ?>" class="btn btn-primary waves-effect">Edit</a></td>
                                    </tr>
                                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>