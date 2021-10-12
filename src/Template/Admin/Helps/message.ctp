<section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            </div>
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Help Messages
                                
                            </h2>
                          
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                  $cnt=1;
                  foreach($Help as $value){?>
                                    <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $value['name'];?></td>
                                    <td><?php echo $value['email'];?></td>
                                    <td><?php echo $value['message'];?></td>
                                    </tr>
                                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>