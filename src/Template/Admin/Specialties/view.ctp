<?php //pr($Sliders); die;?>
<div class="content-wrapper">
<section class="content">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>dishname</th>
                      <th>Image</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $cnt=1;
                  foreach($Specialties as $Specialtie){?>
                  <tr>
<td><?php echo $cnt;?></td>
<td><?php echo $Specialtie['dishname'];?></td>

<td><img src="<?php echo SITE_URL; ?>/dishimg/<?php echo $Specialtie['dishimg'];?>" height="50px" width="50px"></td>
<td>
<?php if($Specialtie['status']=='Y'){ ?>
  <a href="<?php echo ADMIN_URL ?>Specialties/status/<?php echo $Specialtie['id']; ?>/<?php echo $Specialtie['status'];  ?>" class="btn btn-block btn-success btn-xs">Inactive</a>
<?php } else{ ?>
  <a href="<?php echo ADMIN_URL ?>Specialties/status/<?php echo $Specialtie['id']; ?>/<?php echo $Specialtie['status'];  ?>"class="btn btn-block btn-danger btn-xs">Active</a>
<?php } ?>
</td>
<td><a href="<?php echo ADMIN_URL ?>Specialties/edit/<?php echo $Specialtie['id']; ?>" class="btn btn-block btn-primary btn-sm">Edit</a></td>
<td><a href="<?php echo ADMIN_URL ?>Specialties/delete/<?php echo $Specialtie['id']; ?>"class="btn btn-block btn-danger btn-xs">Delete</a>
</td>                 
</tr>
                  <?php $cnt++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </section>
      </div>