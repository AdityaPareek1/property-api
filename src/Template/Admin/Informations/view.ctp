<?php //pr($Sliders); die;?>
<div class="content-wrapper">
<section class="content">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>address</th>
                      <th>time</th>
                      <th>phone</th>
                      <th>phone1</th>
                      <th>email</th>
                      <th>email1</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                 
                  $cnt=1;
                  foreach($Informations as $information){?>
                  
                  <tr>
<td><?php echo $cnt;?></td>
<td><?php echo $information['address'];?></td>
<td><?php echo $information['time'];?></td>
<td><?php echo $information['phone'];?></td>
<td><?php echo $information['phone1'];?></td>
<td><?php echo $information['email'];?></td>
<td><?php echo $information['email1'];?></td>


<td><a href="<?php echo ADMIN_URL ?>Informations/edit/<?php echo $information['id']; ?>" class="btn btn-block btn-primary btn-sm">Edit</a></td>
<td><a href="<?php echo ADMIN_URL ?>Informations/delete/<?php echo $information['id']; ?>"class="btn btn-block btn-danger btn-xs">Delete</a>
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