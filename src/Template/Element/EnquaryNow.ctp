<div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModa2Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModa2Label"> Enquary Now</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php echo $this->Form->create('',array('url'=>array('controller'=>'Loginqqs','action'=>'otp_verify')));?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Mobile</label>
                              <input type="tel" name="Phone" class="form-control" placeholder="Enter Your Mobile No">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="mail" name="mail" class="form-control" placeholder="Enter Your Email Id">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                      <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>