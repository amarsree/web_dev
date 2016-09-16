<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- spage: /Default.asp -->
    
    <title>Million Doller Moment</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <style type="text/css"> 
	<!--	@import url(http://fonts.googleapis.com/css?family=Raleway:400,200,300);
		@import url(http://fonts.googleapis.com/css?family=Open+Sans);
		@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed);
    -->
	</style>
 <!--   <link rel="stylesheet" type="text/css"   href="../dev.m.colincowie.com/fonts/183106/FD4BA651226B0C74A.css" />
    <link rel="stylesheet" type="text/css" href="jquery-ui.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/transit.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script src="js/modernizr.custom.js"></script>
    
    <!-- SLIDER -->
	<link rel="stylesheet" href="slider/refineslide.css" />
	<link rel="stylesheet" href="slider/refineslide-theme-dark.css" />
    
    <!-- PORTFOLIO SWIPE PLUGIN --> 
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" />
    

    
    <!-- jQuery UI -->
    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    


</head>
<body> 

	
		
<?php  include "side_menu.php"; ?>
            
	
  <!-- main page contentents  -->
      <div class="clr"></div>
          <div id="page-sub-inside">   
            <a href="celebrations.html"><img class="subpage-header-hmpg-top" src="img/2.jpg" /></a>
            <a href="corporate.html"><img class="subpage-header-hmpg" src="img/mobile/02-corporate.jpg" /></a> 
            <a href="http://www.colincowieweddings.com/"><img class="subpage-header-hmpg" src="img/mobile/09-inspiration.jpg" /></a> 
            <a href="gallery.html"><img class="subpage-header-hmpg" src="img/mobile/03-ourwork.jpg" /></a> 
            <a href="about.html"><img class="subpage-header-hmpg" src="img/mobile/04-aboutcolin.jpg" /></a> 
            <a href="philanthropy.html"><img class="subpage-header-hmpg" src="img/mobile/05-philanthropy.jpg" /></a> 
            <a href="contact.html"><img class="subpage-header-hmpg" src="img/mobile/06-contact.jpg" /></a>   
<!--end of main page contentents  -->
			
   
<?php include "social.php"; ?>

    

<!-- Quantcast Tag 
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-AESZ-fKpcpAtq"
});
</script>

<noscript>
<div style="display:none;">
<img src="../pixel.quantserve.com/pixel/p-AESZ-fKpcpAtq.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
 
  

          </div>
	  
      
      <div id="page-inside">   
      
    	

      <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
       
       
        </div> 
    </div> 
    
<div class="clr"></div>
<!--<div class="full-content">
    <h5> WELCOME TO COLIN COWIE </h5>
        <p style="text-align:justify">Colin Cowie is on fire with an events business that travels the four corners of the world doing everything from intimate birthday celebrations to iconic weddings to corporate bashes, a hot new website on weddings and a consulting business that works on international hospitality and design projects for hotels, retailers and airlines. Layer on top of that his being a regular contributor to NBC’s The Today Show, a popular personality on HSN with home and lifestyle collections, and his ever-growing collection of lifestyle and entertaining books.</p>
</div>--->
        
    
    <script src="slider/modernizr.js"></script>
    <script src="slider/jquery.refineslide.js"></script>
    <script>
        $(function () {
            var $upper = $('#upper');

            $('#images').refineSlide({
                transition : 'slideH',
                onInit : function () {
                    var slider = this.slider,
                       $triggers = $('.translist').find('> li > a');

                    $triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

                    $triggers.on('click', function (e) {
                       e.preventDefault();

                        if (!$(this).find('.unsupported').length) {
                            $triggers.removeClass('active');
                            $(this).addClass('active');
                            slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                        }
                    });

                    function support(result, bobble) {
                        var phrase = '';

                        if (!result) {
                            phrase = ' not';
                            $upper.find('div.bobble-'+ bobble).addClass('unsupported');
                            $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                        }
                    }

                    support(this.slider.cssTransforms3d, '3d');
                    support(this.slider.cssTransitions, 'css');
                }
            });
        });
    </script>


    </div>
	</div>
	</div>
	</div>
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>

	<script src='js/swipe.js'></script>
    <script> var slider3 = new Swipe(document.getElementById('slider3')); </script>

	<div class="clr"></div>
    	
	</div>
</div>

</body>
</html>
