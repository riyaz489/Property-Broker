
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								We’re Real Estate Leader
							</h1>
							<div class="search-field">
								<form class="search-form" action="<?= $this->url->build(["controller"=>"Properties","action"=>"show"]);?>" method="post">
									 <div class="row">
									 	<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
											<div class="row">
												<div class="col">
													<h4 class="search-title">Search Properties For</h4>
												</div>
												<div class="col">
													<div class="onoffswitch3 d-block mx-auto">
													    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
													    <label class="onoffswitch3-label" for="myonoffswitch3">
													        <span class="onoffswitch3-inner">
													            <span class="onoffswitch3-active">
													            	<span class="onoffswitch3-switch">Sell</span>
													            	<span class="lnr lnr-arrow-right"></span>
													            </span>
													            <span class="onoffswitch3-inactive">
													            	<span class="lnr lnr-arrow-left"></span>
													            	<span class="onoffswitch3-switch">Rent</span>
													            </span>
													        </span>
													    </label>
													</div>													
												</div>
											</div>
									 	</div>
									    <div class="col-lg-4 col-md-6 col-xs-6">
											<select name="location" id="location" class="app-select form-control" required>
												<option data-display="Choose locations">Choose locations</option>
												<?= $data1?>
											</select>
										</div>
									  
                                       
									    <div class="col-lg-4 col-md-6 col-xs-6">
											<select name="bedroom" class="app-select form-control" required>
												<option data-display="Bedrooms">Bedrooms</option>
												<option value="one">One</option>
												<option value="two">Two</option>
												<option value="three">Three</option>
											</select>
									    </div>
									    <div class="col-lg-4 col-md-6 col-xs-6">
											<select name="type" class="app-select form-control" required>
												<option data-display="Type">Type</option>
												<option value="Apartment">Apartment</option>
												<option value="House">House</option>
												<option value="Section">Section</option>
			                                    <option value="TownHouse">TownHouse</option>
											</select>
									    </div>
									    <div class="col-lg-4 range-wrap">
									    	<p>Price Range:</p>
									    	<input type="text" id="range" value="" name="range" />
									    </div>	
									    <div class="col-lg-4 range-wrap">
									    	<p>Area Range(sqm):</p>
									    	<input type="text" id="range2" value="" name="range2" />
									    </div>										    
									    <div class="col-lg-4 d-flex justify-content-end">
											<button class="primary-btn mt-50 srch-btn" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
										</div>						  
									  </div>
							  	</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Why we are the best</h1>
							<p>
								Who are in extremely love with property dealing.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									The are best.they are proficient in their work .they make world better place by their services.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
								The are best.they are proficient in their work .they make world better place by their services.
									</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
								The are best.they are proficient in their work .they make world better place by their services.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
								The are best.they are proficient in their work .they make world better place by their services.
									</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->

			<!-- Start property Area -->
			<section class="property-area section-gap relative" id="property">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Our Top Rated Properties</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="<?= $this->url->image("s3.jpg")?>" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>Rs 3.5lacs</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="<?= $this->url->image("s2.jpg")?>" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>Rs3.5lacs</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="<?= $this->url->image("s3.jpg")?>" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>Rs3.5lacs</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End property Area -->	
				
			<!-- Start city Area -->
			<section class="city-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?= $this->url->image("p1.jpg")?>" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Uttarakhand Properties</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="content">
							    <a href="#" target="_blank">
							      <div class="content-overlay"></div>
							  		 <img class="content-image img-fluid d-block mx-auto" src="<?= $this->url->image("p2.jpg")?>" alt="">
							      <div class="content-details fadeIn-bottom">
							        <h3 class="content-title">Mumbai Properties</h3>
							      </div>
							    </a>
						  	</div>
							<div class="row city-bottom">
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="<?= $this->url->image("p3.jpg")?>" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Karnatka Properties</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="<?= $this->url->image("p4.jpg")?>" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Goa Properties</h3>
									      </div>
									    </a>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End city Area -->

			<!-- Start About Area -->
			<section class="about-area">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 about-left">
							<div class="single-about pb-30">
								<h4>Why Choose Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about pb-30">
								<h4>Our Properties</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about">
								<h4>legal notice</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>																
						</div>			
						<div class="col-lg-6 about-right no-padding">
							<img class="img-fluid" src="<?= $this->url->image("about-img.jpg")?>" alt="">
						</div>			
					</div>
				</div>	
			</section>
			<!-- End About Area -->		
		
			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visit Our Office</h4>
							 <p>
							 	56/8, Dit University, Makkawala, 
							 	Mussorie-diversion road,
							 	<br> Dehradun - 248009
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s call us</h4>
							 <p>
								Phone 01: +91-3456-568-9746 <br>
								Phone 02: +91-6532-568-9748 <br>
								FAX: 12-3456-568-746
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s Email Us</h4>
							 <p>
								hello@gmail.com <br>
								mainhelp@gmail.com <br>
								info@gmail.com
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Customer Support</h4>
							 <p>
							 	support@gmail.com <br>
								emergencysupp@gmail.com <br>
								extremesupp@gmail.com
							 </p>                                   
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End contact-info Area -->

			<!-- Start Contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<div style=" width:100%;
	                height: 545px;" id="map"></div>
						</div>
						<div class="col-lg-4 col-md-12 pt-100 pb-100">
							<form class="form-area" name="f1" id="myForm"   class="contact-form text-right">
								<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
								<textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
								<button  type="button" onclick="loadDoc('<?= $this->url->build( ["controller"=>"Properties","action"=>"mail"]); ?>')" class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
								<div id="alert-msg">
								</div>
							</form>
                        </div>
 

					</div>
				</div>
			</section>
			<!-- End Contact Area -->	