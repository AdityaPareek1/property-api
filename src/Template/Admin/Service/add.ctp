<section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Basic Edit
                            </h2>
                        </div>
                        <div class="body">
                        <?php echo $this->Form->create('',array('type'=>'file'))?>
                                <label >Service Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('projectName',array('placeholder'=>'projectName','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                                        
                                    </div>
                                </div>
                                <label>Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('projectImage',array('class'=>'form-control','type'=>'file','label'=>false));  ?>  
                                    </div>
                                </div>
                                <button class="btn btn-primary m-t-15 waves-effect">Submit</button>
                                <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>

         