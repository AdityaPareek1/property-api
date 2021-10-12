<!--Connected_Properties_start-->
<?php // pr($data); die;
 //$data['images']=$data1; pr($data);  ?>
<div class="Connected_Properties proparty_details">
  <div class="container">
  <div class="propety_list_top">
          <div class="form-group">
          <select class="form-control form-select" aria-label="Default select example">
            <option selected="">Active</option>
            <option>Active</option>
            <option>Deactive</option>
            <option>Daeleted </option>
            <option>Pending</option>
          </select>
        </div >
      </div>
      <?php foreach($Array as $data)  {?>
    <div class="row">
      <div class="col-md-3">
        <div class="Gallery sec_space"> 
          
          <!-- Scrollable modal --> 
          <!-- Button trigger modal -->
          <?php  foreach($data['propertyimages'] as $img)?>
          <a type="button" class="img_btn delete" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img class="img-fluid" src="<?php echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="cart_2" hrfe="<?php echo $img['property_list_id']; ?>"> </a>
         <?php echo $this->Html->image(
    '/PropertyImages/'.$img['image'],
         array(
        'url' =>
        array(
           'controller'=>'ListProperty',
           'action'=>'myproperty',
           $data['id'],
           
            ),
            'data-bs-target' =>'#exampleModal',
            'data-bs-toggle'=>'modal',
            'class'=>'img-fluid img_btn',
          )

          );?>
          <?php ?>
          <!-- <fieldset>
       
        
         </fieldset> -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Photos </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <ul>
                       
                    <?php  foreach($Rent as $img) { ?>
                    <li><img src="<?php echo SITE_URL;?>PropertyImages/<?php echo $img['image'];?>" alt="popular_hongout_1"></li>
                    <?php } ?>
                     </ul>
                    </div>
              </div>
            </div>
           </div>
   
        </div>
      </div>
      <div class="col-md-9">
        <div class="cont_paroparty">
          <div class="hkflat">
            <div class="flat_cont">
              <div  class="Verified"> <span><?php echo $data['property_sale_rent'];?></span> <strong><span>Property Id:</span><?php echo $data['id'];?></strong> 
				          <p><strong>Active</strong> </p>              
                  <figure><img src="assets/images/right.png" alt="right"></figure>
                 <p><strong> Verified</strong> </p>
                   <div class="date">
                    <p><?php echo $data['date_status'];?> </p>
                  </div>
              </div>
              <ul>
                <li>
                  <h5><?php echo $data['bhk'];?>BHK <?php echo $data['property_type'];?>  <?php echo $data['area'];?></h5>
                  Sale For Jagtpura, Jaipur</li>
                <li>
                  <h5><?php echo $data['expectted_price'];?></h5>
                  4500 per sqft</li>
              </ul>
            </div>
          </div>
          <ul class="bed_sec bh_btn3">
          <li><a href="<?php echo SITE_URL;?>Profile/viewProperty" class="default_btn">View Property</a></li>
            <li><a href="<?php echo SITE_URL;?>Profile/editProfile" class="default_btn">Edit Property</a></li>
            <li><a href="<?php echo SITE_URL;?>Profile/status/<?php echo $data['id']; ?>/<?php echo $data['status'];?>" class="default_btn">Deactive Property</a></li>
            <li><a href="<?php echo SITE_URL;?>Profile/delete/<?php echo $data['id']; ?>/<?php echo $data['status'];?>" class="default_btn"><i class="fas fa-trash-alt"></i> </a></li>
          </ul>
        </div>
      </div>

     </div>
     <?php } //pr($data); die;?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="profile Pro_ano">
          <ul>
            <li><a href="<?php echo SITE_URL;?>Profile/list"><span> <i class="fas fa-user-edit"></i> </span>Add Another Property<span class="right_ar"> <i class="fas fa-chevron-right"></i> </span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Connected_Properties_end--> 
<script>
$( document ).ready(function() {
  alert();
    $('.delete').click(function(){
     var id=$(this).data('id');
     
$.ajax({
  'type':'POST',
  'data':{
    'id':id,
    
  },
  'url':'<?php echo ADMIN_URL;?>sliders/delete/',
  'beforeSend':function(data){

  },
  'success':function(data){
$('.card-body').html(data);
  }
})
});
});
</script>