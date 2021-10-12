<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a  href="<?php echo ADMIN_URL;?>Admin/index">Home</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
              <?php echo $this->Form->create($user)?>
              
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <?php echo $this->Form->input('name',array('placeholder'=>'name','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <?php echo $this->Form->input('username',array('placeholder'=>'Email','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone No.</label>
                    <?php echo $this->Form->input('mobile',array('placeholder'=>'mobile','class'=>'form-control','type'=>'number','label'=>false));  ?> 
                    
                  </div>
                  <div class="form-group">
                
                    <label for="exampleInputPassword1">Role</label>
                    
                    <?php $options=['---Select Role---','1'=>'Super Admin','2'=>'Admin','3'=>'Users'];?>
                    <?php echo $this->Form->input('role_id',array( 'class'=>'form-control','type'=>'select','label'=>false,'options'=>$options));  ?> 
                   
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->