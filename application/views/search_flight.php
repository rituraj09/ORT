<!--Search Flight -->

 <div class="container" >
    <div class="searchWrapper" >
        <div id="rs_search_multi" class='rs_searchbox rs_searchbox_hide'  >
            <ul class="rs_products">
                <li class="rs_tabs highlight_tab" id="rs_air_tab" data-tab="rs_air_form">
                <center>
                <div class="rs_product_icon" id="iconAir"></div>
                <div>Flights</div>
                </center>
                </li>
                <li class="rs_tabs" id="rs_hotel_tab" data-tab="rs_hotel_form">
                    <center>
                <div class="rs_product_icon" id="iconHotel"></div>
                <div>Hotels</div>
                </center>
                </li>
                
                <li class="rs_tabs" id="rs_vp_tab" data-tab="rs_vp_form">
   <center>
                <div class="rs_product_icon" id="iconVP"></div>
                <div>Vacations</div>
                </center>
            </li>
                <li class="rs_tabs last_tab" id="rs_car_tab" data-tab="rs_car_form">
   <center>
                <div class="rs_product_icon" id="iconCar"></div>
                <div>Cars</div>
                </center>
                </li>
            </ul>
            <form name="hotel" class="rs_hotel_form rs_searchbox_hide">
                <div class='rs_form_row rs_autosuggest_row'>
                    <input
                        name="query"
                        class="rs_autosuggest autosuggest"
                        type="text"
                        title="Enter a City or Airport"
                        autocomplete="off"
                        value="Enter a City or Airport"
                    >
                    <div class='rs_suggest'></div>
                </div>
                <div class='rs_form_row rs_date rs_chk_in_row'>
                    <div class='rs_date_input_container'>
                        <input name="check_in" class="rs_chk_in" title='Enter your check in date.'  type='text' autocomplete="off" value="Check in" readonly>
                    </div>
                </div>
                <div class='rs_form_row rs_date rs_chk_out_row'>
                    <div class='rs_date_input_container'>
                        <input name="check_out" class="rs_chk_out" type='text' title='Enter your check out date.' autocomplete="off" value="Check out" readonly>
                    </div>
                </div>
                <div class='rs_mobi'>
                    <div class='rs_mobi_date_container rs_mobi_in'>
                        <div class='rs_mobi_title'>Check in</div>
                        <div class='rs_date_chk_in'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>
                    <div class='rs_mobi_date_container rs_mobi_out'>
                        <div class='rs_mobi_title'>Check out</div>
                        <div class='rs_date_chk_out'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>
                </div>
                <div class='rs_form_row rs_rooms_row'>
                    <select class="rs_rooms rooms" name="rooms" title='Number of Rooms'></select>
                </div>
                <div class='rs_form_row rs_guest_row'>
                    <select name="adults" class="rs_select_box js_guest_select"></select>
                </div>
                <div class='rs_button_row'>
                    <button type="submit" class="rs_search search" title='Search'>Search</button>
                </div>
                <div class='clear'></div>
            </form>
            <form name="vp" class="vp rs_vp_form rs_searchbox_hide">
                <div class="rs_form_row rs_origin_row">
                    <input name="rs_o_city" class="from rs_autosuggest rs_from" value='Enter a City or Airport' autocomplete="off">
                </div>
                <div class="rs_form_row rs_destination_row">
                    <input name="rs_d_city" class="to rs_autosuggest rs_to" value='Enter a City or Airport' autocomplete="off">
                </div>
                <div class='rs_mobi'>
                    <div class='rs_mobi_date_container rs_mobi_in'>
                        <div class='rs_mobi_title'>Check in</div>
                        <div class='rs_date_chk_in'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>
                    <div class='rs_mobi_date_container rs_mobi_out'>
                        <div class='rs_mobi_title'>Check out</div>
                        <div class='rs_date_chk_out'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>
                    <div class='clear'></div>
                </div>

                <div class="rs_form_row rs_date rs_chk_in_row">
                    <div class='rs_date_input_container'>
                        <input name="rs_chk_in" class="rs_chk_in" value="Check in">
                    </div>
                </div>
                <div class="rs_form_row rs_date rs_chk_out_row last_margin">
                    <div class='rs_date_input_container'>
                        <input name="rs_chk_out" class="rs_chk_out" value="Check out">
                    </div>
                </div>
                <div class="rs_form_row rs_rooms_row">
                    <select name="rs_adults" class="rs_adults_input pax">
                    </select>
                </div>
                <div class="rs_form_row rs_rooms_row">
                    <select name="rs_children" class="rs_child_input pax">
                    </select>
                </div>
                <div class="rs_form_row rs_rooms_row last_margin">
                    <select class="rooms" name="rs_rooms">
                    </select>
                </div>
                <div class="rs_button_row">
                    <button type="submit" class="rs_search search">Search</button>
                </div>
                <div class="clear"></div>
                <div id="childrens_ages"></div>
                <div class="rs_chk_in_display"></div>
                <div class="rs_chk_out_display"></div>
            </form>
            <form name="car" class="rs_car_form rs_searchbox_hide">
                <div class="rs_form_row rs_pickup_div">
                    <input class="rs_pickup rs_autosuggest pickup" name="rs_pu_city" autocomplete="off"  value="Enter a City or Airport"><br/><br/>
                </div>
                <div class="rs_form_row rs_different_location">
                    <input type="checkbox" name="different_return" id="different_return">
                    <label for="different_return">Return at a different location?</label>
                </div>
                <div class="rs_form_row rs_droppff_div">
                    <input class="rs_dropoff rs_autosuggest dropoff" name="rs_do_city" autocomplete="off"  value="Enter a City or Airport">
                </div>
                <div class='rs_mobi'>
                    <div class='rs_mobi_date_container rs_mobi_in'>
                        <div class='rs_mobi_title'>Pick up</div>
                        <div class='rs_date_chk_in'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>

                    <div class='rs_mobi_date_container rs_mobi_out'>
                        <div class='rs_mobi_title'>Drop off</div>
                        <div class='rs_date_chk_out'>
                            <div class='rs_mobi_chk_day'>Day</div>
                            <div class='rs_mobi_chk_month'>Month</div>
                        </div>
                    </div>
                    <div class='clear'></div>
                </div>
                <div class="rs_form_row rs_date rs_chk_in_row">
                    <div class='rs_date_input_container'>
                        <input name="rs_pu_date" class="rs_chk_in rs_border_radius" value="Pick up" readonly>
                    </div>
                </div>
                <div class="rs_form_row rs_rooms_row rs_time_in_row">
                    <select name="rs_pu_time" class="rs_time_in rs_time"></select>
                </div>
                <div class="rs_form_row rs_date rs_chk_in_row">
                    <div class='rs_date_input_container'>
                        <input name="rs_do_date" class="rs_chk_out" value="Drop off" readonly>
                    </div>
                </div>
                <div class="rs_form_row rs_rooms_row rs_time_out_row">
                    <select name="rs_do_time" class="rs_time_out rs_time"></select>
                </div>
                <div class="rs_chk_in_display"></div>
                <div class="rs_chk_out_display"></div>
                <div class="rs_button_row">
                    <button type="submit" class="rs_search search">Search</button>
                </div>
                <div class="clear"></div>
            </form>
            <form name="air" class="air rs_air_form">
                <div class="rs_air_options">
                    <!--                <span class="rs_air_option rs_air_highlight"><input type="radio" class="round-trip" name="air-radio" id="round-trip" checked><label for="round-trip">Round Trip</label></span>-->
                    <!--                <span class="rs_air_option"><input type="radio" class="one-way" name="air-radio" id="one-way"><label for="one-way">One Way</label></span>-->
                    <!--                <input type="radio" class="multi-city" name="air-radio" id="multi-city"><label for="multi-city">Multi City</label></span>-->
                    <span style="float: left;" class="rs_air_option rs_air_highlight"><input type="radio" class="round-trip " name="air-radio" id="round-trip" checked><label for="round-trip">Round Trip</label></span>
                    <span style="float: left;" class="rs_air_option"><input type="radio" class="one-way" name="air-radio" id="one-way"><label for="one-way">One Way</label></span>
                    <span style="float: left;" class="rs_air_option"><input type="radio" class="multi-city" name="air-radio" id="multi-city"><label for="multi-city">Multi City</label></span><br/>
                </div>
                <div class="clear"></div> 
                <p> &nbsp;</p>
                <div id="air_round_trip">
                    <div class="rs_form_row rs_origin_row">
                    <label>Flying from</label>
                        <input name="rs_o_city" class="from autosuggest rs_from" value='Enter a City or Airport' autocomplete="off">
                    </div>
                    <div class="rs_form_row rs_destination_row">
                     <label>Flying to</label>
                        <input name="rs_d_city" class="to autosuggest rs_to" value='Enter a City or Airport' autocomplete="off">
                    </div> 
                    <div class='rs_mobi'>
                        <div class='rs_mobi_date_container rs_mobi_in'>
                            <div class='rs_mobi_title'>Depart</div>
                            <div class='rs_date_chk_in rs_mobiin'>
                                <div class='rs_mobi_chk_day'>Day</div>
                                <div class='rs_mobi_chk_month'>Month</div>
                            </div>
                        </div>
                        <div class='rs_mobi_date_container rs_mobi_out'>
                            <div class='rs_mobi_title'>Return</div>
                            <div class='rs_date_chk_out rs_mobiout'>
                                <div class='rs_mobi_chk_day'>Day</div>
                                <div class='rs_mobi_chk_month'>Month</div>
                            </div>
                        </div>
                        <div class='clear'></div>
                    </div>

                    <div class="rs_form_row rs_date rs_chk_in_row">
                        <div class='rs_date_input_container'>
                            <input name="rs_chk_in" class="rs_chk_in" value="Depart" readonly>
                        </div>
                    </div>
                    <div class="rs_form_row rs_date rs_check_out_row last_margin">
                        <div class='rs_date_input_container'>
                            <input name="rs_chk_out" class="rs_chk_out" value="Return" readonly>
                        </div>
                    </div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_adults" class="rs_adults_input pax adults">
                        </select>
                    </div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_children" class="rs_child_input pax children">
                        </select>
                    </div>
                    <div class="rs_form_row rs_rooms_row last_margin">
                        <select name="cabin_class" class="rs_select_skin_activated rs_select_box rs_cabin_box">
                            <option selected="" value="">Cabin Class</option>
                            <option value="economy">Economy/Coach</option>
                            <option value="premium">Premium Economy</option>
                            <option value="business">Business</option>
                            <option value="first">First</option>
                        </select>
                    </div>
                      <div class="clear"></div>
                    <div class="brk">
                    <div class="rs_button_row">
                        <button type="submit" class="rs_search search">Search</button>
                    </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="air_one_way">
                    <div class="rs_form_row rs_origin_row">
                    <label>Flying from</label>
                        <input name="rs_o_city1" class="from autosuggest rs_from" value='Enter a City or Airport' autocomplete="off">
                    </div>
                    <div class="rs_form_row rs_destination_row">
                    <label>Flying to</label>
                        <input name="rs_d_city1" class="to autosuggest rs_to" value='Enter a City or Airport' autocomplete="off">
                    </div>
                    <div class='rs_mobi'>

                        <div class='rs_mobi_date_container rs_mobi_in'>
                            <div class='rs_mobi_title'>Depart</div>
                            <div class='rs_date_chk_in rs_mobi1'>
                                <div class='rs_mobi_chk_day'>Day</div>
                                <div class='rs_mobi_chk_month'>Month</div>
                            </div>
                        </div>
                        <div class='clear'></div>

                    </div>
                    <div class="rs_form_row rs_date rs_chk_in_row">
                        <div class='rs_date_input_container'>
                            <input name="rs_chk_in1" class="rs_chk_in" value="Depart" readonly>
                        </div>
                    </div>
                    <div class="clear_air"></div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_adults" class="rs_adults_input pax adults">
                        </select>
                    </div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_children" class="rs_child_input pax children">
                        </select>
                    </div>
                    <div class="rs_form_row rs_rooms_row last_margin">
                        <select name="cabin_class" class="rs_select_skin_activated rs_select_box rs_cabin_box">
                            <option selected="" value="">Cabin Class</option>
                            <option value="economy">Economy/Coach</option>
                            <option value="premium">Premium Economy</option>
                            <option value="business">Business</option>
                            <option value="first">First</option>
                        </select>
                    </div>
                        <div class="clear"></div>
                    <div class="brk">
                    <div class="rs_button_row">
                        <button type="submit" class="rs_search search">Search</button>
                    </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="air_multi_dest">
                    <div class="air_multi_seperator">
                        <div class="rs_form_row rs_origin_row">
                         <label>Flying from</label>
                            <input name="rs_o_city1" class="from autosuggest rs_from" value='City or Airport Name' autocomplete="off">
                        </div>
                        <div class="rs_form_row rs_destination_row">
                         <label>Flying to</label>
                            <input name="rs_d_city1" class="to autosuggest rs_to" value='City or Airport Name' autocomplete="off">
                        </div>
                        <div class='rs_mobi'>

                            <div class='rs_mobi_date_container rs_mobi_in'>
                                <div class='rs_mobi_title'>Depart</div>
                                <div class='rs_date_chk_in rs_mobi1'>
                                    <div class='rs_mobi_chk_day'>Day</div>
                                    <div class='rs_mobi_chk_month'>Month</div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
<p> &nbsp;</p>
                        <div class="rs_form_row rs_date rs_chk_in_row">
                            <div class='rs_date_input_container'>
                                <input name="rs_chk_in1" class="rs_chk_in" value="Depart">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                 
                    <div class="air_multi_seperator">
                        <div class="rs_form_row rs_origin_row">
                            <input name="rs_o_city2" class="from autosuggest rs_from" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class="rs_form_row rs_destination_row">
                            <input name="rs_d_city2" class="to autosuggest rs_to" value='City or Airport Name' autocomplete="off">
                        </div>

                        <div class='rs_mobi'>
                            <div class='rs_mobi_date_container rs_mobi_in'>
                                <div class='rs_mobi_title'>Depart</div>
                                <div class='rs_date_chk_in rs_mobi2'>
                                    <div class='rs_mobi_chk_day'>Day</div>
                                    <div class='rs_mobi_chk_month'>Month</div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>

                        <div class="rs_form_row rs_date rs_chk_in_row">
                            <div class='rs_date_input_container'>
                                <input name="rs_chk_in2" class="rs_chk_in" value="Depart">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="rs_form_row">
                            <span class="add_rem_flight add_flight2" onClick="showMulti(2)">+ Add Flight</span>
                        </div>
                    </div>
                 
                    <div class="air_multi_seperator air_flight_3">
                        <div class="rs_form_row rs_origin_row">
                            <input name="rs_o_city3" class="from autosuggest rs_from" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class="rs_form_row rs_destination_row">
                            <input name="rs_d_city3" class="to autosuggest rs_to" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class='rs_mobi'>
                            <div class='rs_mobi_date_container rs_mobi_in'>
                                <div class='rs_mobi_title'>Depart</div>
                                <div class='rs_date_chk_in rs_mobi3'>
                                    <div class='rs_mobi_chk_day'>Day</div>
                                    <div class='rs_mobi_chk_month'>Month</div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class="rs_form_row rs_date rs_chk_in_row">
                            <div class='rs_date_input_container'>
                                <input name="rs_chk_in3" class="rs_chk_in" value="Depart">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="rs_form_row">
                            <span class="add_rem_flight rem_flight3" onClick="hideMulti(3)">- Remove Flight</span>
                            <span class="add_rem_flight add_flight3" onClick="showMulti(3)">+ Add Flight</span>
                        </div>
                    </div>
                    <div class="rs_chk_in3_display"></div>
                      
                    <div class="air_multi_seperator air_flight_4">
                        <div class="rs_form_row rs_origin_row">
                            <input name="rs_o_city4" class="from autosuggest rs_from" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class="rs_form_row rs_destination_row">
                            <input name="rs_d_city4" class="to autosuggest rs_to" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class='rs_mobi'>
                            <div class='rs_mobi_date_container rs_mobi_in'>
                                <div class='rs_mobi_title'>Depart</div>
                                <div class='rs_date_chk_in rs_mobi4'>
                                    <div class='rs_mobi_chk_day'>Day</div>
                                    <div class='rs_mobi_chk_month'>Month</div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class="rs_form_row rs_date rs_chk_in_row">
                            <div class='rs_date_input_container'>
                                <input name="rs_chk_in4" class="rs_chk_in" value="Depart">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="rs_form_row">
                            <span class="add_rem_flight rem_flight4" onClick="hideMulti(4)">- Remove Flight</span>
                            <span class="add_rem_flight add_flight4" onClick="showMulti(4)">+ Add Flight</span>
                        </div>
                    </div>
                    <div class="air_multi_seperator air_flight_5">
                        <div class="rs_form_row rs_origin_row">
                            <input name="rs_o_city5" class="from autosuggest rs_from" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class="rs_form_row rs_destination_row">
                            <input name="rs_d_city5" class="to autosuggest rs_to" value='City or Airport Name' autocomplete="off">
                        </div>


                        <div class='rs_mobi'>
                            <div class='rs_mobi_date_container rs_mobi_in'>
                                <div class='rs_mobi_title'>Check-in</div>
                                <div class='rs_date_chk_in rs_mobi5'>
                                    <div class='rs_mobi_chk_day'>Day</div>
                                    <div class='rs_mobi_chk_month'>Month</div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class="rs_form_row rs_date rs_chk_in_row">
                            <div class='rs_date_input_container'>
                                <input name="rs_chk_in5" class="rs_chk_in" value="Depart">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="rs_form_row">
                            <span class="add_rem_flight rem_flight5" onClick="hideMulti(5)">- Remove Flight</span>
                        </div>
                    </div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_adults" class="rs_adults_input pax adults"></select>
                    </div>
                    <div class="rs_form_row rs_rooms_row">
                        <select name="rs_children" class="rs_child_input pax children"></select>
                    </div>
                    <div class="rs_form_row rs_rooms_row last_margin">
                        <select name="cabin_class" class="rs_select_skin_activated rs_select_box rs_cabin_box">
                            <option selected="" value="">Cabin Class</option>
                            <option value="economy">Economy/Coach</option>
                            <option value="premium">Premium Economy</option>
                            <option value="business">Business</option>
                            <option value="first">First</option>
                        </select>
                    </div>
                        <div class="clear"></div>
                    <div class="brk">
                    <div class="rs_button_row">
                        <button type="submit" class="rs_search search">Search</button>
                    </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".rs_tabs").on("click", function(){
                var futureTab = $(this).data("tab"),
                    $selectedForm = $("."+futureTab);
                if ($selectedForm.hasClass("rs_searchbox_hide")) {
                    $selectedForm.removeClass('rs_searchbox_hide').siblings("form").addClass("rs_searchbox_hide");
                }
            });

        });
    </script>
</div>



<!--Search Flight Ending -->