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
                        <?php echo $this->Form->create($Brands,array('type'=>'file'))?>
                                <label >brandName</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php echo $this->Form->input('brandName',array('placeholder'=>'address','class'=>'form-control','type'=>'text','label'=>false));  ?> 
                                        
                                    </div>
                                </div>
                                <label>Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <?php if($Brands['brandImage']){?>
                                    <td><img src="<?php echo SITE_URL;?>brandImage/<?php echo $Brands['brandImage'];?>" height="50px" width="50px"></td>
                                    <a href="<?php echo ADMIN_URL; ?>Brands/remove/<?php echo $Brands['id']; ?>"><p style="color:#5383d3">Remove image<p></a>
                                    <?php } else {?>
                                        <?php echo $this->Form->input('brandImage',array('class'=>'form-control','type'=>'file','label'=>false));  ?>  
                                        <?php }?>
                                    </div>
                                </div>
                                <button class="btn btn-primary m-t-15 waves-effect">Submit</button>
                                <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>

         