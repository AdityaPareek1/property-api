<!--Contact_start-->

<div class="Contact_sec singiup">
  <div class="container">
    <h2>Step-1</h2>
    <div class="row bg_contacts singin">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme step_form">
          <div class="item">
          <?php echo $this->Form->create();?>
              <div class="row">
                <p class="m_bott">Property Details :</p>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Choose Your Location </label>
                    <input type="text" name="Name" class="form-control" placeholder="Choose Your Location ">
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="m_bott">Choose Property Type :</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Flot</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">House/Vill </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Plot</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                        <label class="form-check-label" for="inlineCheckbox4"> Office space </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                        <label class="form-check-label" for="inlineCheckbox5">Shop/Showroom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                        <label class="form-check-label" for="inlineCheckbox6">Other Commercial</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="m_bott">Choose Bedrooms  :</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                        <label class="form-check-label" for="inlineCheckbox7">1</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                        <label class="form-check-label" for="inlineCheckbox8">2</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                        <label class="form-check-label" for="inlineCheckbox9">3</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                        <label class="form-check-label" for="inlineCheckbox10">4</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
                        <label class="form-check-label" for="inlineCheckbox11">5</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option12">
                        <label class="form-check-label" for="inlineCheckbox12">6</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="m_bott">Choose Area :</p>
                  <div class="area">
                    <ul>
                      <li>Area</li>
                      <li>52 - fl</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="m_bott">Choose Budget :</p>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Minimum</label>
                      <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Minimum">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Maximum</label>
                      <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Maximum">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                <p class="m_bott">Preferences :</p>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Need Possession :</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected="">Within 3-6 Months</option>
                      <option>Within a Year</option>
                      <option>1-2 Years</option>
                      <option>Ready to Move</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Transaction type :</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected="">New</option>
                      <option>Resale</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label> Age of construction  :</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected="">New</option>
                      <option>3 to 5 Years</option>
                      <option>5 to 10 Years</option>
                      <option>None</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Direction preference  :</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected="">East</option>
                      <option>West</option>
                      <option>North</option>
                      <option>South</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Floor preference  :</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected="">Ground Floor </option>
                      <option>1 to 5</option>
                      <option>Above 5</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                <div class="col-md-12">
                  <p class="m_bott">Contact Details :</p>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="mail" name="mail" class="form-control" placeholder="Enter Your Email Id">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Mobile No</label>
                    <input type="tel" name="Phone" class="form-control" placeholder="Enter Your Mobile No">
                  </div>
                </div>
              </div>
				
				<div class="step_btn">
                <button type="submit" class="default_btn">Submit</button>
				</div>
                <?php echo $this->Form->end();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Contacts_End--> 