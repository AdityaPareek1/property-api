<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Form</li>
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
                <h3 class="card-title">Add information </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
              <?php echo $this->Form->create()?>
              
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <?php echo $this->Form->input('address',array('placeholder'=>'address','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">time</label>
                    <?php echo $this->Form->input('time',array('placeholder'=>'time','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <?php echo $this->Form->input('phone',array('placeholder'=>'phone','class'=>'form-control','type'=>'number','label'=>false));  ?> 
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">More phone</label>
                    <?php echo $this->Form->input('phone1',array('placeholder'=>'phone1','class'=>'form-control','type'=>'number','label'=>false));  ?> 
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <?php echo $this->Form->input('email',array('placeholder'=>'email','class'=>'form-control','type'=>'email','label'=>false));  ?> 
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email1</label>
                    <?php echo $this->Form->input('email1',array('placeholder'=>'email1','class'=>'form-control','type'=>'email','label'=>false));  ?> 
                    
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->