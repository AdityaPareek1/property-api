
<!--Contact_end-->

<div class="Contact_sec singiup">
  <div class="container">
    <div class="row bg_contacts singin">
      <div class="col-md-12">
      <?= $this->Flash->render('smsalert'); ?>
      <?php echo $this->Form->create('',array('url'=>array('controller'=>'Feedback','action'=>'feedback')));?>
          <p class="m_bott">Feedback :</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Mail</label>
                <input type="tel" name="mail" class="form-control"  placeholder="Mail ID">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-control" placeholder="Phone No">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" placeholder="Feedback"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group text-center"> <button class="default_btn Contact_btn">Send</button> </div>
            </div>
          </div>
          <?php echo $this->Form->end();?>
      </div>
    </div>
  </div>
</div>
<!--Contacts_start-->
