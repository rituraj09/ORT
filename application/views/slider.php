    <link rel="stylesheet" type="text/css" href="assets/css/styles2.css" media="all" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

<div class="container" style="width:100% !important">
			      
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="assets/images/new_bg.jpg" alt="" title=""/></a>
	    		<!--<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>-->
	    	</li>
	    	<li>
	    		<!-- <a href="#"><img src="assets/images/new_bg5.jpg" alt="" title=""/></a> -->
                         <a href="#"><img src="assets/images/travel-bg.jpg" alt="" title=""/></a>
	    		<!--<div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>-->
	    	</li>
	    	<li>
	    		<a href="#"><img src="assets/images/new_bg6.jpg" alt="" title=""/></a>
	    		<!--<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>-->
	    	</li>
	    	
	    </ul>
	  </div>
   </div>
    </div>  



