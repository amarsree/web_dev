<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	
    <!-- spage: /weddings.asp -->
    
    <title>Colin Cowie Mobile</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
   
    <link rel="stylesheet" type="text/css" href="../dev.m.colincowie.com/fonts/183106/FD4BA651226B0C74A.css" />
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

<?php include "side_menu.php";?>
      
      <div class="clr"></div>
          <div id="page-sub-inside">   
            <img class="subpage-header-img" src="img/mobile/10-weddings.jpg" /> 
          </div>
	  
      <!--
          <div class="box-content"> <h1> <a href="#"> SIGNATURE </a> </h1> </div>
    <div class="box-content"> <h1> <a href="#"> TEAM COWIE </a> </h1></div>
    <div class="box-content"> <h1> <a href="#"> CONSULTING </a> </h1></div>
    <div class="box-content"> <h1> <a href="#"> FLORAL & DÉCOR </a> </h1> </div>
		-->
      
      <div id="page-inside">   
      
    	<div class="full-content" align="center">

        <p style="text-align:justify">For over 20 years we have created magical memoires on a global scale for a diverse set of clients that have included private individuals, socialites, royalty, red-carpet celebrities and captains of industry. Whether you are planning your event between our coastal offices or elsewhere on the globe CCC will help you realize your first public joint statement of style that will be uniquely yours. Our ability to understand what is important to you and to picture what you envision has allowed us to create experiences that resonate powerfully and make us the first choice for conceiving and planning weddings.
<br /><br />
We offer a full scope of <a href="how-we-work.html">services</a> for any size party. We create exceptional experiences by providing extraordinary care in the details of how we work.
<br /><br />
To inquire further <a href="event-inquiry.html">click here</a> to commence your journey to magical, meaningful and memorable.
</p>
&nbsp;
		<div id="inquiry-button" align="center">
          <a href="event-inquiry.html">Submit an inquiry</a>
        </div>
        </div>

<br />
<div class="clr"></div>

  
<div id="social_icons">
    	<div id="s_icons_pos">
    	<a href="https://www.facebook.com/itsmecolincowie"> <img src="img/social/facebook%402x.png"> </a>
        <a href="https://twitter.com/colincowie"> <img src="img/social/twitter%402x.png"> </a>
    	</div>
    </div>    
    
    <!-- google -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6942673-9', 'auto');
  ga('send', 'pageview');

</script>

<!-- Quantcast Tag -->
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
      
<!--<div class="full-content">
    <h5> WELCOME TO COLIN COWIE </h5>
        <p style="text-align:justify">Colin Cowie is on fire with an events business that travels the four corners of the world doing everything from intimate birthday celebrations to iconic weddings to corporate bashes, a hot new website on weddings and a consulting business that works on international hospitality and design projects for hotels, retailers and airlines. Layer on top of that his being a regular contributor to NBC’s The Today Show, a popular personality on HSN with home and lifestyle collections, and his ever-growing collection of lifestyle and entertaining books.</p>
</div>-->
        
    
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
    
 <script>

$( "#accordion" ).accordion({ header: "h3", active: false, collapsible: true });



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

	<div class="clr"></div>
    	
	</div>
</div>

</body>

<!-- Mirrored from m.colincowie.com/weddings.asp by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2016 07:41:11 GMT -->
</html>
