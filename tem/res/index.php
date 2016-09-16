<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type='text/javascript'>
      
//Thanks to: http://www.webtipblog.com/adding-scroll-top-button-website/
$(document).ready(function(){
alert('s');
  $(function(){
 
    $(document).on( 'scroll', function(){
 
      if ($(window).scrollTop() > 100) {
      $('.scroll-top-wrapper').addClass('show');
    } else {
      $('.scroll-top-wrapper').removeClass('show');
    }
  });
 
  $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});






    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  
<!-- Put this in your head tag in your template  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="#">YouSite.com <span class="label label-warning text-capitalize"> Free</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><button type="button" class="btn btn-success navbar-btn btn-circle">Sign in</button></li>
            </ul>
        </div>
      </div>
    </nav>
    <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="content">
                  <div class="pull-middle">
                    <h1 class="page-header">Scroll to top feature</h1>
                    <p>PERFECT from mobile devices</p>
                    <p><a href="http://bootsnipp.com/iframe/GX14E" target="_blank">View this Bootsnipp in full screen</a></p>
                    <p class="lead">Just scroll down, and a Back to Top button will appear</p>
                    <p><a  href="https://validator.w3.org/nu/?showsource=yes&doc=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FGX14E">HTML5 validator</a></p>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="#" role="form">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                    <span class="input-group-btn">
                                      <button class="btn btn-success btn-circle" type="submit">Sign up for free</button>
                                    </span>                        
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>              
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center mt-100 mb-100">
                <div class="phone">
                    <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480" alt="">
                </div>
            </div>
          </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-1 text-center mt-100 mb-100">
                    <div class="phone">
                        <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="content">
                        <div class="pull-middle">
                            <h2 class="h1 page-header">Discover more about features.</h2>
                            <ul class="media-list">
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-cloud icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Praesent porttitor urna ut enim.</h3>
                                  <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                </div>
                              </li>
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-lock icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Cras consequat est et elit.</h3>
                                  <p>Integer suscipit massa at tellus semper, at aliquam ante bibendum.</p>
                                </div>
                              </li>
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-user icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Aenean vel enim quis dui blandit.</h3>
                                  <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-right">
                    <div class="content">
                        <div class="pull-middle">
                            <h4><strong>Describe your product.</strong></h4>
                            <p>Proin sapien neque, consequat ac tempus aliquam, gravida in urna. Phasellus et lectus in odio imperdiet tempus. Aenean posuere, nunc a tristique imperdiet, massa dolor dictum eros, sit amet tempor turpis turpis vel tortor.</p>
                            <small>Phasellus feugiat at lorem a tincidunt. Nam hendrerit leo vitae orci pellentesque, nec euismod dolor condimentum.</small>
                        </div>
                    </div>
                </div>
               <div class="col-md-4 col-md-offset-1 mt-100 mb-100">
                    <div class="phone">
                        <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="content">
                        <div class="pull-middle">
                            <h4><strong>Even more stuff.</strong></h4>
                            <p>Proin sapien neque, consequat ac tempus aliquam, gravida in urna. Phasellus et lectus in odio imperdiet tempus. Aenean posuere, nunc a tristique imperdiet, massa dolor dictum eros, sit amet tempor turpis turpis vel tortor.</p>
                            <a class="btn btn-success btn-circle" href="#">Sign up for free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2015. Crafted with love by <a href="https://www.twitter.com/maridlcrmn">@maridlcrmn</a></small>
        </div>
    </footer>

<!-- The scroll to top feature -->
    
<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>
</div>

</body>

</html>