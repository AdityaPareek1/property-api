<section class="content">
        <div class="container-fluid">
            <div class="block-header">  
        </div>
    <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
                <div class="header">
                <h2>PG</h2>
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
                  foreach($pg as $data){?>
                <tr>
                    <td><?php echo $cnt;?></td>
                   <td><?php echo $data['type'];?></td>
                   <td><?php echo $data['mobile'];?></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['email'];?></td>
                   <td><?php echo $data['property_type'];?></td>
                   <td><?php echo $data['bhk'];?></td>
                    <td><?php echo $data['area'];?></td>
                    <td><?php echo $data['property_sale_rent'];?></td>
                    <td><?php echo $data['expectted_price'];?></td>
                   <td><?php echo $data['construcation_status'];?></td>
                    <td><?php echo $data['available_form'];?></td>
                    <td><?php echo $data['bathrooms'];?></td>
                    <td><?php echo $data['furnished_status'];?></td>
                   <td><?php echo $data['total_floores'];?></td>
                    <td><?php echo $data['floor_number'];?></td>
                    <td>
                    <?php if($data['status']=='Y') { ?><a href='<?php echo ADMIN_URL;?>Property/status/<?php echo $data['id']; ?>/<?php echo $data['status'];?>'   class="btn btn-block btn-success btn-sm">Active</a> <?php } else{ ?>
                    <a href='<?php echo ADMIN_URL;?>Property/status/<?php echo $data['id']; ?>/<?php echo $data['status'];?>' class="btn btn-block btn-danger btn-sm" >In Active</a>
                    <?php } ?> 
                    <td>
                    <?php if($data['verified']=='yes') { ?><a href='<?php echo ADMIN_URL;?>Property/verified/<?php echo $data['id']; ?>/<?php echo $data['verified'];?>'   class="btn btn-block btn-success btn-sm">Verify</a> <?php } else{ ?>
                    <a href='<?php echo ADMIN_URL;?>Property/verified/<?php echo $data['id']; ?>/<?php echo $data['verified'];?>' class="btn bg-black waves-effect waves-light" disabled="disabled" >verified</a>
                    <?php } ?> </td>
                </tr>
                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>