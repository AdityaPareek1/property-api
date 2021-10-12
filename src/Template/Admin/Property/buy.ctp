<section class="content">
        <div class="container-fluid">
            <div class="block-header">  
        </div>
    <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
                <div class="header">
                <h2>Buy</h2>
                </div>
                <div class="body table-responsive">
                <table class="table">
                <thead>
                    <tr>
                     <th>#</th>
                      <th>type</th>
                      <th>mobile</th>
                      <th>name</th>
                      <th>email</th>
                      <th>property_type</th>
                      <th>bhk</th>
                      <th>area</th>
                      <th>property_sale_rent</th>
                      <th>expectted_price</th>
                      <th>construcation_status</th>
                      <th>available_form</th>
                      <th>bathrooms</th>
                      <th>furnished_status	</th>
                      <th>total_floores</th>
                      <th>floor_number</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $cnt=1;
                  foreach($Buy as $buy){?>
                <tr>
                    <td><?php echo $cnt;?></td>
                   <td><?php echo $buy['type'];?></td>
                   <td><?php echo $buy['mobile'];?></td>
                    <td><?php echo $buy['name'];?></td>
                    <td><?php echo $buy['email'];?></td>
                   <td><?php echo $buy['property_type'];?></td>
                   <td><?php echo $buy['bhk'];?></td>
                    <td><?php echo $buy['area'];?></td>
                    <td><?php echo $buy['property_sale_rent'];?></td>
                    <td><?php echo $buy['expectted_price'];?></td>
                   <td><?php echo $buy['construcation_status'];?></td>
                    <td><?php echo $buy['available_form'];?></td>
                    <td><?php echo $buy['bathrooms'];?></td>
                    <td><?php echo $buy['furnished_status'];?></td>
                   <td><?php echo $buy['total_floores'];?></td>
                    <td><?php echo $buy['floor_number'];?></td>
                    <td>
                    <?php if($buy['status']=='Y') { ?><a href='<?php echo ADMIN_URL;?>Property/status/<?php echo $buy['id']; ?>/<?php echo $buy['status'];?>'   class="btn btn-block btn-success btn-sm">Active</a> <?php } else{ ?>
                    <a href='<?php echo ADMIN_URL;?>Property/status/<?php echo $buy['id']; ?>/<?php echo $buy['status'];?>' class="btn btn-block btn-danger btn-sm" >In Active</a>
                    <?php } ?> 
                    <td>
                    <?php if($buy['verified']=='no') { ?><a href='<?php echo ADMIN_URL;?>Property/verified/<?php echo $buy['id']; ?>/<?php echo $buy['verified'];?>'   class="btn btn-block btn-success btn-sm">Verify</a> <?php } else{ ?>
                    <a href='<?php echo ADMIN_URL;?>Property/verified/<?php echo $buy['id']; ?>/<?php echo $buy['verified'];?>' class="btn bg-black waves-effect waves-light" disabled="disabled" >verified</a>
                    <?php } ?> </td>
                </tr>
                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>