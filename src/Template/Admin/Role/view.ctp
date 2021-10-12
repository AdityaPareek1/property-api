<?php //pr($users); die;?>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $cnt=1;
                  foreach($users as $user){?>
                  <tr>
<td><?php echo $cnt;?></td>
<td><?php echo $user['name'];?></td>
<td><?php echo $user['username'];?></td>
<td><?php echo $user['mobile'];?></td>
<td>
<?php if($user['status']=='Y'){ ?>
  <a href="<?php echo ADMIN_URL ?>Admin/status/<?php echo $user['id']; ?>/<?php echo $user['status'];  ?>" class="btn btn-block btn-success btn-xs">Inactive</a>
<?php } else{ ?>
  <a href="<?php echo ADMIN_URL ?>Admin/status/<?php echo $user['id']; ?>/<?php echo $user['status'];  ?>"class="btn btn-block btn-danger btn-xs">Active</a>
<?php } ?>
</td>
<td><a href="<?php echo ADMIN_URL ?>Admin/edit/<?php echo $user['id']; ?>" class="btn btn-block btn-primary btn-sm">Edit</a></td>
<td><a href="<?php echo ADMIN_URL ?>Admin/delete/<?php echo $user['id']; ?>"class="btn btn-block btn-danger btn-xs">Delete</a>
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