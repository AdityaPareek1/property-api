<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			
		<?php //pr($Menus); die;?>
			   
				<?php if(!empty($Sliders)){ foreach($Sliders as $slider){?>
					
			   	<li style="background-image: url(<?php echo SITE_URL; ?>sliders/<?php echo $slider['sliderimg']; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1><?php echo $slider['slidername'];?></h1>
					   					<p><?php echo $slider['description'];?></p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				<?php }}else{ ?>
					
					
						<li style="background-image: url(//images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>Special &amp; Fresh Food</h1>
					   					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				<?php } ?>
			   	
			  	</ul>
			  	    <div class="mouse">
				   <a href="#" class="mouse-icon">
				   	<div class="mouse-wheel"></div>
				   </a>
				</div>
		  	</div>
		</aside>
		
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Address</h2>
							<p><?php echo $Information['address'];?></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Opening Time</h2>
							<p>Monday - Sunday</p>
							<span><?php echo $Information['time'];?></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Phone</h2>
							<p><?php echo $Information['phone'];?></p>
							<p><?php echo $Information['phone1'];?></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#"><?php echo $Information['email'];?></a><br><a href="#"><?php echo $Information['email1'];?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="goto-here"></div>

		<div class="colorlib-about" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<div class="about-desc">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<span>Welcome to luto</span>
									<h2>Taste a delicious food here in Italy &amp; We are inspired since 1895</h2>
								</div>
								<div class="col-md-12 animate-box">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-6 animate-box">
								<div class="about-img" style="background-image: url(images/about.jpg);">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="about-img about-img-2" style="background-image: url(images/about-2.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><i class="flaticon-cutlery"></i></span>
						<h2>Our Delicious Specialties</h2>
						<p>Even the all-powerful Pointing has no control about tthe blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<?php if(!empty($Specialties)){ foreach($Specialties as $Specialtie){?>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(<?php echo SITE_URL; ?>dishimg/<?php echo $Specialtie['dishimg']; ?>);"></div>
								<div class="desc">
									<h2><a href="#"><?php echo $Specialtie['dishname'];?></a></h2>
								</div>
							</div>
						</div>
					</div>
					<?php }}else{ ?>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-2.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Pizza with strawberries</a></h2>
								</div>
							</div>
						</div>
					</div>
					
		<?php } ?>
		<div class="colorlib-introduction" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-push-3">
						<div class="intro-box animate-box">
							<h2><a href="#"></a>Foods you love to taste</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg btn-outline popup-vimeo"><i class="icon-play3"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><i class="flaticon-cutlery"></i></span>
						<h2>Our Delicious Specialties</h2>
						<p>Even the all-powerful Pointing has no control about tthe blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<?php if(!empty($Specialties)){ foreach($Specialties as $Specialtie){?>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(<?php echo SITE_URL; ?>dishimg/<?php echo $Specialtie['dishimg']; ?>);"></div>
								<div class="desc">
									<h2><a href="#"><?php echo $Specialtie['dishname'];?></a></h2>
								</div>
							</div>
						</div>
					</div>
					<?php }}else{ ?>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-2.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Pizza with strawberries</a></h2>
								</div>
							</div>
						</div>
					</div>
					
		<?php } ?>

		<div class="colorlib-testimony" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Our Customer Says</h2>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										<span>" &mdash; George Brooks</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<span>" &mdash; Daniel Foster</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
										<span>" &mdash; Liam Jenkins</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="colorlib-menu-2">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span class="icon"><i class="flaticon-cutlery"></i></span>
							<h2>Lutong Bahay Menu</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="nav nav-tabs text-center" role="tablist">
										<li role="presentation" class="active"><a href="#main" aria-controls="mains" role="tab" data-toggle="tab">Main</a></li>
										<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
										<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="main">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
											
										
											<?php if(!empty($Menus)){ foreach($Menus as $Menu){
												if($Menu['category']!='main'){
continue;
												}
												?>
											
											<?php// pr($Menu); die;?>
												
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(<?php echo SITE_URL; ?>dishimage/<?php echo $Menu['dishimage']; ?>);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price"><?php echo $Menu['price'];?></span>
							                  <h3><?php echo $Menu['name'];?></h3>
							                  <p class="cat"><?php echo $Menu['dishinfo'];?></p>
							                </div>
							              </li>
										  
							             
										
							            </ul>
									
										</div>
										
										<div class="col-md-6">
											<ul class="menu-dish">
											<?php }}else{ ?>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-9.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Marinated Beef</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
										 
							             
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-11.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Letson Kawali</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-12.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Fried Pork</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-13.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Chopsuey</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            
										  <?php }?>
							            </ul>
										</div>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane" id="desserts">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
											<?php if(!empty($Menus)){ foreach($Menus as $Menu){ 
												if($Menu['category']!='desserts'){
                                           continue;
												}?>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(<?php echo SITE_URL; ?>dishimage/<?php echo $Menu['dishimage']; ?>);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price"><?php echo $Menu['price'];?></span>
							                  <h3><?php echo $Menu['name'];?></h3>
							                  <p class="cat"><?php echo $Menu['dishinfo'];?></p>
							                </div>
							              </li>
									  
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
											<?php }}else{ ?>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-7.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Choco Bread</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
										  <?php } ?>
							          
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="drinks">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
											<?php if(!empty($Menus)){ foreach($Menus as $Menu){
												if($Menu['category']!='drinks')
                                           continue;?>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(<?php echo SITE_URL; ?>dishimage/<?php echo $Menu['dishimage']; ?>);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price"><?php echo $Menu['price'];?></span>
							                  <h3><?php echo $Menu['name'];?></h3>
							                  <p class="cat"><?php echo $Menu['dishinfo'];?></p>
							                </div>
							              </li>
										
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
											<?php }}else {?>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-7.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Mango Juice</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              
							              
							              
							              
											<?php }?>
							              
							            </ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 animate-box text-center">
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
							<p><a href="#" class="btn btn-primary btn-outline btn-md">Book a table</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-reservation reservation-img" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Make A Reservation</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="row">
							<div class="col-md-12">
							<?php echo $this->Form->create('',array('url'=>array('controller' => 'Customers', 'action' => 'Reservations' ),'class'=>'colorlib-form')) ?>
								<!-- <form method="post" class="colorlib-form"> -->
				              	<div class="row">
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="name">Fullname</label>
												<div class="form-field">
												<?php echo $this->Form->input('name',array('placeholder'=>'Fullname','class'=>'form-control','type'=>'text','label'=>false));  ?> 
													<!-- <input type="text" class="form-control" placeholder="name"> -->
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="email">Email</label>
												<div class="form-field">
												<?php echo $this->Form->input('email',array('placeholder'=>'Email','class'=>'form-control','type'=>'email','label'=>false));  ?> 
													<!-- <input type="text" class="form-control" placeholder="email"> -->
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="phone">Phone</label>
												<div class="form-field">
												<?php echo $this->Form->input('phone',array('placeholder'=>'phone','class'=>'form-control','type'=>'number','label'=>false));  ?> 
													<!-- <input type="text" class="form-control" placeholder="phone"> -->
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
											
												<label for="date">Date:</label>
												<div class="form-field">
													<i class="icon icon-calendar2"></i>
													<?php echo $this->Form->input('date',array('placeholder'=>'date','class'=>'form-control date','type'=>'text','label'=>false));  ?> 
													<!-- <input type="text" id="date" class="form-control date" placeholder="Date"> -->
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="time">Time</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="time" id="time" class="form-control">
														<option value="#">6:30am</option>
														<option value="#">7:00am</option>
														<option value="#">7:30am</option>
														<option value="#">8:00am</option>
														<option value="#">8:30am</option>
														<option value="#">9:00am</option>
														<option value="#">9:30am</option>
														<option value="#">10:00am</option>
														<option value="#">10:30am</option>
														<option value="#">11:00am</option>
														<option value="#">11:30am</option>
														<option value="#">12:00am</option>
														<option value="#">12:30am</option>
														<option value="#">1:00pm</option>
														<option value="#">1:30pm</option>
														<option value="#">2:00pm</option>
														<option value="#">2:30pm</option>
														<option value="#">3:00pm</option>
														<option value="#">3:30pm</option>
														<option value="#">4:00pm</option>
														<option value="#">4:30pm</option>
														<option value="#">5:00pm</option>
														<option value="#">5:30pm</option>
														<option value="#">6:00pm</option>
														<option value="#">6:30pm</option>
														<option value="#">7:00pm</option>
														<option value="#">7:30pm</option>
														<option value="#">8:00pm</option>
														<option value="#">8:30pm</option>
														<option value="#">9:00pm</option>
														<option value="#">9:30pm</option>
														<option value="#">10:00pm</option>
														<option value="#">10:30pm</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="person">Person</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="people" id="people" class="form-control">
														<option value="#">1</option>
														<option value="#">2</option>
														<option value="#">3</option>
														<option value="#">4</option>
														<option value="#">5+</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													<input type="submit" name="submit" id="submit" value="Book a table" class="btn btn-primary btn-block">
												</div>
											</div>
										</div>
									</div>
				            </form>
			           	</div>
						</div>
					</div>
				</div>
			</div>
		</div>