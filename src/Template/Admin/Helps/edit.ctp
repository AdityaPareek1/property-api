
<section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Help Information Edit
                            </h2>
                        </div>
                        <div class="body">
                        <?php echo $this->Form->create($Info)?>
                                
                                <label>Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('help_email',array('placeholder'=>'Enter your Email','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                                        
                                    </div>
                                </div>

                                <label>Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('help_address',array('placeholder'=>'Enter your Address','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                                        
                                    </div>
                                </div>

                                <label>Mobile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('help_mobile',array('placeholder'=>'Enter your Mobile','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                                        
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary m-t-15 waves-effect">Submit</button>
                                <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>
