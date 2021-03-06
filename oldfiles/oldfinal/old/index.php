<?php include ("header.php");?>
	<div class="full-height">
     <div class="clip">
		<div class="bg bg-bg-chrome" style="background-image:url(img/slider.jpg)">
       
		</div>
	 </div>
	 <div class="vertical-align">
	  <div class="container">
	  	<div class="tabs-slider">
	  	   <div class="baner-tabs">
			   <div class="text-center">
				 <div class="drop-tabs">
				   <b>Flights</b>	
					<a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
					 <ul class="nav-tabs tpl-tabs tabs-style-1">
						<li class="active click-tabs"><a href="#one" data-toggle="tab" aria-expanded="false"><span class="fa fa-plane"></span>flights</a>  </li>
						<!--<li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false"><span class="fa fa-bed"></span>hotels</a></li>
						<li class="click-tabs"><a href="#three" data-toggle="tab" aria-expanded="false"><span class="fa fa-car"></span>cars</a></li>-->
						
					 </ul>
				 </div>
			   </div>
	           <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
				<div class="tab-pane active in" id="one">
                  <div class="timePiker"></div>
                   <div class="baner-bar cars-bar">
					<?php include ("form.php")?>
				 </div>
				</div>
                <div class="tab-pane" id="two">
				   <form action="#" class="hotel-filter">
					<div class="baner-bar">
					  <div class="row">
						<div class="col-md-4">
						 <div class="hotels-block">
						  <h4>where</h4>
							<div class="input-style-1">
								<img src="img/loc_icon_small_grey.png" alt="">
								  <input type="text" placeholder="Enter a destination or hotel name" required>
							</div>
						 </div>	
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>rooms</h4>
						   <div class="count">
							  <a href="#" class="active">1</a>
							  <a href="#">2</a>
							  <a href="#">3</a>
							  <a href="#">3+</a>
						   </div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Adult</h4>
						   <div class="count">
							  <a href="#" class="active">1</a>
							  <a href="#">2</a>
							  <a href="#">3</a>
							  <a href="#">3+</a>
						   </div>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">	
							<div class="range-wrapp">
							  <h4>Price range</h4>
								<div class="slider-range" data-counter="$" data-position="start" data-from="0" data-to="5000" data-min="0" data-max="5000">
									<div class="range"></div>
									<input type="text" class="amount-start" readonly value="$0">
									<input type="text" class="amount-end" readonly value="$1500">						
								</div>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="submit">
							   <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
							</div>
						</div>
					</div>
				   </div>
				  </form>
			    </div>
		        
			    <div class="tab-pane" id="three">
			      <div class="timePiker"></div>
				   <div class="baner-bar cars-bar">
					<div class="row">
						<div class="col-md-12">
						 <div class="hotels-block">
						  <h4>From</h4>
							<div class="input-style-1">
								<img src="img/loc_icon_small_grey.png" alt="">
								  <input type="text" placeholder="Destination; Zip Code" required>
							</div>
							<div class="input-entry color-5">
								<input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
								<label class="clearfix" for="text-2">
									<span class="sp-check"><i class="fa fa-check"></i></span>
									<span class="checkbox-text">Same location</span>
								</label>
							</div>
						 </div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						 <div class="hotels-block">
						  <h4>To</h4>
							<div class="input-style-1">
								<img src="img/loc_icon_small_grey.png" alt="">
								  <input type="text" placeholder="Destination; Zip Code" required>
							</div>
						 </div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Time</h4>
							<div class="time-input">
							  <img src="img/clock.png" alt="">
								<input type="text" data-field="time" readonly>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Time</h4>
							<div class="time-input">
							  <img src="img/clock.png" alt="">
								<input type="text" data-field="time" readonly>
							</div>
						  </div>

						</div>
						<div class="col-md-2 col-md-offset-2">
							<div class="submit">
							   <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">	
							<div class="range-wrapp">
							   <h4>Price range</h4>
								<div class="slider-range" data-counter="$" data-position="start" data-from="0" data-to="5000" data-min="0" data-max="5000">
									<div class="range"></div>
									<input type="text" class="amount-start" readonly value="$0">
									<input type="text" class="amount-end" readonly value="$1500">						
								</div>
							</div>
						</div>	
					</div>
				 </div>
			</div>			
				<div class="tab-pane" id="four">
                  <div class="timePiker"></div>
                   <div class="baner-bar cars-bar">
					<div class="row">
						<div class="col-md-12">
						 <div class="hotels-block">
						  <h4>From</h4>
							<div class="input-style-1">
								<img src="img/loc_icon_small_grey.png" alt="">
								  <input type="text" placeholder="Destination; Zip Code" required>
							</div>
							<div class="input-entry color-5">
								<input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
								<label class="clearfix" for="text-3">
									<span class="sp-check"><i class="fa fa-check"></i></span>
									<span class="checkbox-text">Same location</span>
								</label>
							</div>
						 </div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						 <div class="hotels-block">
						  <h4>To</h4>
							<div class="input-style-1">
								<img src="img/loc_icon_small_grey.png" alt="">
								  <input type="text" placeholder="Destination; Zip Code" required>
							</div>
						 </div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Time</h4>
							<div class="time-input">
							  <img src="img/clock.png" alt="">
								<input type="text" data-field="time" readonly>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Check in</h4>
							<div class="input-style-1">
								<img src="img/calendar_icon_grey.png" alt="">
								  <input type="text" placeholder="" class="datepicker" required>
							</div>
						  </div>
						</div>
						<div class="col-md-2">
						  <div class="hotels-block">
						   <h4>Time</h4>
							<div class="time-input">
							  <img src="img/clock.png" alt="">
								<input type="text" data-field="time" readonly>
							</div>
						  </div>

						</div>
						<div class="col-md-2 col-md-offset-2">
							<div class="submit">
							   <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">	
							<div class="range-wrapp">
							   <h4>Price range</h4>
								<div class="slider-range" data-counter="$" data-position="start" data-from="0" data-to="5000" data-min="0" data-max="5000">
									<div class="range"></div>
									<input type="text" class="amount-start" readonly value="$0">
									<input type="text" class="amount-end" readonly value="$1500">						
								</div>
							</div>
						</div>	
					</div>
				 </div>
				</div>
				<div class="tab-pane" id="five">
                    <form action="#" class="hotel-filter">
					   <div class="baner-bar">
						  <div class="row">
							<div class="col-md-4">
							 <div class="hotels-block">
							  <h4>where</h4>
								<div class="input-style-1">
									<img src="img/loc_icon_small_grey.png" alt="">
									  <input type="text" placeholder="Destination; Zip Code" required>
								</div>
							 </div>	
							</div>
							<div class="col-md-2">
							  <div class="hotels-block">
							   <h4>Check in</h4>
								<div class="input-style-1">
									<img src="img/calendar_icon_grey.png" alt="">
									  <input type="text" placeholder="" class="datepicker" required>
								</div>
							  </div>
							</div>
							<div class="col-md-2">
							  <div class="hotels-block">
							   <h4>Check in</h4>
								<div class="input-style-1">
									<img src="img/calendar_icon_grey.png" alt="">
									  <input type="text" placeholder="" class="datepicker" required>
								</div>
							  </div>
							</div>
							<div class="col-md-2">
							  <div class="hotels-block">
							   <h4>rooms</h4>
							   <div class="count">
								  <a href="#" class="active">1</a>
								  <a href="#">2</a>
								  <a href="#">3</a>
								  <a href="#">3+</a>
							   </div>
							  </div>
							</div>
							<div class="col-md-2">
							  <div class="hotels-block">
							   <h4>Adult</h4>
							   <div class="count">
								  <a href="#" class="active">1</a>
								  <a href="#">2</a>
								  <a href="#">3</a>
								  <a href="#">3+</a>
							   </div>
							  </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">	
								<div class="range-wrapp">
								  <h4>Price range</h4>
									<div class="slider-range" data-counter="$" data-position="start" data-from="0" data-to="5000" data-min="0" data-max="5000">
										<div class="range"></div>
										<input type="text" class="amount-start" readonly value="$0">
										<input type="text" class="amount-end" readonly value="$1500">						
									</div>
								</div>
							</div>	
							<div class="col-md-4">
								<div class="submit">
								   <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
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
  </div>

	
	<div class="main-wraper color-2 padd-90">
		<img class="center-image" src="img/tour-bg.jpg" alt="">
		<div class="wide-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="second-title style-2">
					<div style="color:#fff;"><h3>Best Price Guarantee</h3>
You can find our lowest price for any destinations worldwide, guaranteed</br></br>

					<h3>Active Customer Care</h3>
Get booking assistance and special deals by calling 1-844-404-0098</br></br></br></div>

					
					
    					<h2>Our Best Flight Deals</h2>
    				</div>
				</div>
			</div>
			<div class="row">
				<div class="swiper-container" data-autoplay="1" data-loop="1" data-speed="5000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="4" data-md-slides="5" data-lg-slides="6" data-add-slides="6">
				 	<div class="swiper-wrapper">
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>
					  	<div class="swiper-slide">
							<div class="tour-item">
								<div class="tour-desc bg-white">
									<h4>ORD - MSP</h4>
									<div class="tour-text color-grey-3">02 Sep - 07 Sep</div>
									<div class="tour-price">from <span class="color-blue">$860</span></div>
							 	</div>
							</div>
					  	</div>					  				  
					  </div>
					<div class="pagination poin-style-2"></div>  
				</div>
			</div>			
		</div>
	</div>

	<div class="main-wraper padd-90">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="second-title">
    					<h2>Our Blogs</h2>
    					<p class="color-grey"></p>
    				</div>
				</div>
			</div>
			<div class="row isotope-container">
				<div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
				<div class="item col-xs-12 col-md-6">
					<div class="tour-block tour-block-s-4 radius-5 underline-block hover-blue">
					    <div class="tour-layer delay-1"></div> 
						<img class="center-image" src="img/flight.jpg" alt="">
						<div class="tour-caption">
						    
							<div class="vertical-align">
								  <div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								  </div>							
								<h3 class="underline hover-it">Flight Ticket Booking</h3>
								
								<p class="color-white-light"></p>  
							</div>
							<div class="vertical-bottom">
								
								
							</div>
						</div>
					</div>			    	
			    </div>
			    <div class="item col-xs-12 col-md-6">
					<div class="tour-block tour-block-s-4 radius-5 underline-block hover-blue">
					    <div class="tour-layer delay-1"></div> 
						<img class="center-image" src="img/weekendtrip.jpg" alt="">
						<div class="tour-caption">
						    
							<div class="vertical-align">
								  <div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								  </div>							
								<h3 class="underline hover-it">Weekend Trip</h3>
								
								<p class="color-white-light"></p>  
							</div>
							<div class="vertical-bottom">
								
								
							</div>
						</div>
					</div>			    	
			    </div>			    
						    			    			
			</div>
		</div>
	</div>
  
	<div class="main-wraper bg-blue padd-100">
		<div class="wide-container clearfix">
			<div class="left-title">
				<div class="second-title">
					
					<h4 class="color-white underline">International Flight Deals</h4>
					
				</div>				
			</div>
			<div class="left-content">
	    		<div class="row">
    				<div class="swiper-container pad-15" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
						  <div class="swiper-wrapper">
						      <div class="swiper-slide">
						          <div class="hotel-item style-3">
						          	 <div class="radius-top">
						          	 	<img src="img/tour_1.jpg" alt="">
						          	 	<div class="price price-s-2">$600</div>
										          	 	 
						          	 </div>
						          	 <div class="title clearfix">
						          	 	<div class="date">July <strong>19th</strong> to July <strong>26th</strong></div>
						          	    <h4><b>Australia</b></h4>
					          	          
						             </div>
						          </div>
							  </div>
							  <div class="swiper-slide">
						          <div class="hotel-item style-3">
						          	 <div class="radius-top">
						          	 	<img src="img/tour_2.jpg" alt="">
						          	 	<div class="price price-s-2">$273</div>
										
						          	 </div>
						          	 <div class="title clearfix">
						          	 	<div class="date">July <strong>19th</strong> to July <strong>26th</strong></div>
						          	    <h4><b>Africa</b></h4>
					          	          
						             </div>
						          </div>
							  </div>
							  <div class="swiper-slide">
						          <div class="hotel-item style-3">
						          	 <div class="radius-top">
						          	 	<img src="img/tour_3.jpg" alt="">
						          	 	<div class="price price-s-2">$273</div>
										         	 	
						          	 </div>
						          	 <div class="title clearfix">
						          	 	<div class="date">July <strong>19th</strong> to July <strong>26th</strong></div>
						          	    <h4><b>Asia</b></h4>
					          	          
						             </div>
						          </div>
							  </div>
							  <div class="swiper-slide">
						          <div class="hotel-item style-3">
						          	 <div class="radius-top">
						          	 	<img src="img/tour_4.jpg" alt="">
						          	 	<div class="price price-s-2">$273</div>
										 	 	
						          	 </div>
						          	 <div class="title clearfix">
						          	 	<div class="date">July <strong>19th</strong> to July <strong>26th</strong></div>
						          	     <h4><b>Newzeland</b></h4>
					          	          
						             </div>
						          </div>
							  </div>
						  </div>
						<div class="pagination"></div>
					</div>
	    		</div>				
			</div>

		</div>
	</div>

	<div class="main-wraper padd-90">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="second-title">
    					<h2>best Deal for you</h2>
    					<p class="color-grey"></p>
    				</div>
				</div>
			</div>
			<div class="row isotope-container">
				<div class="grid-sizer col-xs-12 col-sm-3"></div>
			    <div class="item col-xs-12 col-md-6">
					<div class="row">
		    		  	<div class="top-baner arrows">
							<div class="swiper-container offers-slider" data-autoplay="1" data-loop="1" data-speed="5000" data-slides-per-view="1">
							  	<div class="swiper-wrapper">
									<div class="swiper-slide" data-val="0">
										<div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
										    <div class="tour-layer delay-1"></div> 
											<img class="center-image"  src="img/d2.jpg" alt="">
											<div class="tour-caption">
												<div class="vertical-align">
													<h4>best offer</h4>
													<h3 class="underline hover-it">all best Vacations</h3>
													<p class="color-blue">-15% off</p> 
													<a href="#" class="c-button b-50 bg-white"><span>view more</span></a> 
												</div>
											</div>
										</div>							
									</div>
								</div>
						  		<div class="pagination  poin-style-1 pagination-hidden"></div>
							</div>
		  		         	<div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
						  	<div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>	
						</div>
					</div>
			    </div>					
				<div class="item col-xs-12 col-md-6">
					<div class="tour-block tour-block-s-7 radius-5 underline-block hover-blue">
				     	<div class="tour-layer delay-1"></div> 
					  	<img class="center-image" src="img/propose_2.jpg" alt="">
						<div class="tour-caption">
							<div class="vertical-align">
								<h4>sale <span class="color-blue">-20%</span></h4> 
								<h3 class="underline hover-it">bora bora for HONEYMOON</h3>
								<p class="color-white-light"></p> 								 
							</div>
						</div>
				    </div>
			    </div>
				<div class="item col-xs-12 col-md-6">
					<div class="tour-block tour-block-s-8 radius-5 hover-blue">
				     	<div class="tour-layer delay-1"></div> 
					  	<img class="center-image" src="img/propose_2.jpg" alt="">
						<div class="tour-caption">
							<div class="vertical-align">
								<div class="tb_category">hot sale</div> 
								<h3 class="hover-it">Disney Fantasy cruise</h3>
								<h4>only from <span class="color-blue">$860</span></h4> 								 
							</div>
						</div>
				    </div>
			    </div>			    		    			    			    			
			</div>			
		</div>
	</div>		  	    	  	       
 <?php include ("footer_top.php")?>		
<?php include ("footer.php")?>		   