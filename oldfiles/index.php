<?php include("header.php");
include ("slider.php");
?>
        <section id="content">
            <div class="container" id="my-welcome-message">
                <h2 class="text-center"><img src="images/logo.png"</h2>
                <h3 class="text-center">Call our experts to get the best deal @ 8444040098</h3>
                <p class="text-left"><img style="height: 200px; width: 200px;" src="images/slider-girl.png"></p>

            </div>
            <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix">
                    <li class="active"><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                        <li><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                        
                        
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                           <li class="active"><a ="#flights-tab">FLIGHTS</a></li>
                            <li><a href="#hotels-tab">HOTELS</a></li>
                            
                         <!--  <li><a ="#flight-and-hotel-tab">FLIGHT &amp; HOTELS</a></li>
                             <li><a ="#cars-tab">CARS</a></li>
                            <li><a ="#cruises-tab">CRUISES</a></li>
                            <li><a ="#flight-status-tab">FLIGHT STATUS</a></li>
                            <li><a ="#online-checkin-tab">ONLINE CHECK IN</a></li>-->
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                    <div class="tab-pane fade active in" id="flights-tab">
                            <!--<form action="http://www.soaptheme.net/html/travelo/flight-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="hotels-tab">
                            <!--<form ="http://www.soaptheme.net/html/travelo/hotel-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Check Out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Who</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        
                        <div class="tab-pane fade" id="flight-and-hotel-tab">
                            <!--<form action="http://www.soaptheme.net/html/travelo/flight-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cars-tab">
                            <!--<form action="http://www.soaptheme.net/html/travelo/car-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Pick Up</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Drop Off</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Pick-Up Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-Off Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Car Type</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select a car type</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="compact">Compact</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cruises-tab">
                           <!-- <form action="http://www.soaptheme.net/html/travelo/cruise-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Your Destination</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Departure Date</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Cruise Length</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select length</option>
                                                        <option value="1">1-2 Nights</option>
                                                        <option value="2">3-4 Nights</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Cruise Line</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="icon-check full-width">SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="flight-status-tab">
                           <!-- <form action="http://www.soaptheme.net/html/travelo/flight-list-view.html"--><form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Flight Number</label>
                                            <input type="text" class="input-text full-width" placeholder="enter flight number" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="online-checkin-tab">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Popuplar Destinations -->
            <div class="destinations section">
                <div class="container">
                    <h2>Popular Destinations</h2>
                    <div class="row image-box style1 add-clearfix">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                    <img src="images/destinations01.jpg" alt="" width="270" height="160" />
                                </figure>
                                <div class="details">
                                    <span class="price"><small></small></span>
                                    <h4 class="box-title">Atlantis - The Palm<small>Paris</small></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                                   <img src="images/destinations02.jpg" alt="" width="270" height="160" />
                                </figure>
                                <div class="details">
                                    <span class="price"><small></small></span>
                                    <h4 class="box-title">Hilton Hotel<small>LONDON</small></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.6">
                                 <img src="images/destinations03.jpg" alt="" width="270" height="160" />
                                </figure>
                                <div class="details">
                                    <span class="price"><small></small></span>
                                    <h4 class="box-title">MGM Grand<small>LAS VEGAS</small></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.9">
                                    <img src="images/destinations04.jpg" alt="" width="270" height="160" />
                                </figure>
                                <div class="details">
                                    <span class="price"><small></small></span>
                                    <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Honeymoon -->
            <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="col-sm-6 content-section description pull-right">
                        <h1 class="title">Popular Destinations for Honeymoon</h1>
                        
                        <div class="row places image-box style9">
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="honeymoon_destinations" title="" class="middle-block" data-animation-type="fadeInUp" data-animation-duration="1">
                                            <img src="images/venice.jpg" alt="" width="306" height="170" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Venice</h4>
<!--                                       <!-- <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>-->
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="honeymoon_destinations" title="" class="middle-block" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.4">
                                        <img src="images/ibiza.jpg" alt="" width="175" height="175" /></a>
                                    </figure>
                                    <div class="details">
                                         <h4 class="box-title">Ibiza</h4>
                                     <!-- <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>-->
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                       <a href="honeymoon_destinations" title="" class="middle-block" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.8">
                                        <img src="images/santorini.jpg" alt="" width="340" height="226" /></a>
                                    </figure>
                                    <div class="details">
                                    <h4 class="box-title">Santorini</h4>
                                        <!--<a href="hotel-list-view.html" title="" class="button">SEE ALL</a>-->
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 image-container no-margin">
                        <img src="images/couple.png" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
                    </div>
                </div>
            </div>
            
            <!-- Did you Know? section -->
            <div class="offers section">
                <div class="container">
                    <h1 class="text-center">Travel Blogs</h1>
                    <p class="col-xs-9 center-block no-float text-center"><!--Mauris ullamcorper nibh quis leo ultrices in hendrerit velit tristiqueut augue in nulla lacinia bibendum liberoras rutrum ac purus ut tristique.
Nullam placerat lacinia dolor quis pretium. Phasellus vitae lacinia quam, at pellentesque lorem. Sed euismod turpis quis mattis fringilla.--></p>
                    <div class="row image-box style2">
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="adventure_travel" title=""><img src="images/offers01.jpg" alt="" width="272" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4><a href="adventure_travel">Five destination for adventure travel</a></h4>
                                    <p>
                                        Nothing is more enigmatic and adventurous than to visit places that give an adrenaline rush.
                                        
                                    </p>
                                    <a href="adventure_travel" title="" class="button">See All</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="travel_hacks" title=""><img src="images/offers02.jpg" alt="" width="272" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4><a href="travel_hacks">Travel hack to save your time and money</a></h4>
                                    <p>If you are a travel enthusiast and always looking for hacks to save time and money, you are in for a treat with onerooftravel.com.</p>
                                    <a href="travel_hacks" title="" class="button">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="passionate_travelling" title=""><img src="images/offers03.jpg" alt="" width="272" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4><a href="passionate_travelling">Passionate about travelling: Read this</a></h4>
                                    <p>Someone rightly said, “The man who travels more, knows more.” No matter what your reason for traveling is if you love it, you are lucky to have found onerooftravel.com.</p>
                                    <a href="passionate_travelling" title="" class="button">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="tough_traveller" title=""><img src="images/offers04.jpg" alt="" width="272" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4><a href="tough_traveller">Are you a tough traveller: Explore more</a></h4>
                                    <p>
                                        Tough traveler? Doesn’t ring a bell.
                                        Well, onerooftravel.com is talking about the travelers who are looking for extreme travel adventures spread all over the world.
                                    
                                    </p>
                                    <a href="tough_traveller" title="" class="button">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features section -->
            <div class="features section global-map-area parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row image-box style7">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="middle-block">
                                    <img src="images/shortcodes/image-box/style07/1.jpg" alt="" class="middle-item" width="283" height="200" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4>Best Price Guarantee</h4>
                                    <p>
                                        You can find our lowest price for any destinations worldwide, guaranteed
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="images/shortcodes/image-box/style07/2.jpg" alt="" class="middle-item" width="276" height="126" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4>Active Customer Care</h4>
                                    <p>
                                       Get booking assistance and special deals by calling 1-844-404-0098
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="images/shortcodes/image-box/style07/3.jpg" alt="" class="middle-item" width="284" height="189" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4>Why Choose Us</h4>
                                    <p>
                                       we assist you in choosing the right destination and take care of your travel...
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="images/shortcodes/image-box/style07/4.jpg" alt="" class="middle-item" width="274" height="142" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4>Need help</h4>
                                    <p>
                                        we assist you in choosing the right destination and take care of your travel...
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
             </div>
              <div id="my-welcome-message">
                <h2>OneRoofTravel</h2>
                <p>For Best and Discounted flight fares call +1 - 844 - 404 - 0098</p>
            </div>

        </section>
        
        <?php include("footer.php");?>
       
 
