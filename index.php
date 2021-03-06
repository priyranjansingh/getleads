<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home - GetLeads</title>
<!-- Stylesheets -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="js/masterslider/style/masterslider.css">
<link rel="stylesheet" href="js/masterslider/skins/black-2/style.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28558248-3', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<div id="main-wrapper">
  <header id="header">
 <?php require_once 'topmenu.php'; ?>
    <!-- end .header-top-bar -->
    
    <div class="header-nav-bar">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="http://getleads.ch/"> <img src="img/header-logo.png" alt="GetLeads"> </a> </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li> <a class="act" href="http://getleads.ch/">Home</a></li>
              <li> <a href="http://getleads.ch/getleads.php">GetLeads</a></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="gewinn-tool.php">Gewinn Tool</a></li>
                  <li><a href="feedback-tool.php">Feedback Tool</a></li>
                  <li><a href="qrcode.php">QR Code V2.0</a></li>
                </ul>
              </li>
              <li><a href="kampagnen.php">Kampagnen</a> </li>
              <li><a href="kontakt.php">Kontakt</a> </li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
      </nav>
    </div>
    <!-- end .header-nav-bar --> 
  </header>
  <!-- end #header --> 
  
  <!-- all page-content star -->
  <div id="page-content"> 
    <!-- masterslider -->
    <div class="master-slider ms-skin-black-2 round-skin" id="masterslider"> 
      
      <!-- new slide -->
      <div class="ms-slide"> 
        <!-- slide background --> 
        <img src="js/masterslider/blank.gif" data-src="img/content/home-slide-1.jpg" alt="getleads sushi"> 
        <!-- slide text layer -->
        <div class="ms-layer ms-caption" style="">
          <h1 class="text-right"> <span>Lust auf Sushi?</span> <br />
            Heute schon <br />
            <span class="bold">gratis</span>gegessen?</h1>
          <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Kampage buchen</a> </div>
      </div>
      <!-- end of slide --> 
      
      <!-- new slide -->
      <div class="ms-slide"> 
        <!-- slide background --> 
        <img src="js/masterslider/blank.gif" data-src="img/content/home-slide-2.jpg" alt="getleads pizza"> 
        <!-- slide text layer -->
        <div class="ms-layer ms-caption" style="">
          <h1> <span>Lust auf Pizza?</span> <br />
            Heute schon <br />
            <span class="bold">gratis</span>gegessen?</h1>
          <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Kampage buchen</a> </div>
      </div>
      <!-- end of slide --> 
      
      <!-- new slide -->
      <div class="ms-slide"> 
        <!-- slide background --> 
        <img src="js/masterslider/blank.gif" data-src="img/content/home-slide-3.jpg" alt="getleads kaffee"> 
        <!-- slide text layer -->
        <div class="ms-layer ms-caption" style="">
          <h1> <span>Lust auf Kaffee?</span> <br />
            Heute schon <br />
            <span class="bold">gratis</span>getrunken?</h1>
          <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Kampage buchen</a> </div>
      </div>
      <!-- end of slide --> 
      
      <!-- new slide -->
      <div class="ms-slide"> 
        <!-- slide background --> 
        <img src="js/masterslider/blank.gif" data-src="img/content/home-slide-4.jpg" alt="getleads burger"> 
        <!-- slide text layer -->
        <div class="ms-layer ms-caption" style="">
          <h1> <span>Mobile Survey</span> <br />
            Holen Sie<br />
            <span class="bold">FEEDBACK</span>von Ihren Kunden</h1>
          <a href="feedback-tool.php" class="btn btn-default"><i class="fa fa-file-text-o"></i>Feedback-Tool</a> </div>
      </div>
      <!-- end of slide --> 
      
    </div>
    <!-- end of masterslider --> 
    
    <!-- purchase GetLeads section start -->
    <div class="container">
      <div class="call-to-action-section">
        <div class="css-table-cell">
          <div class="icon"> <img src="img/content/call-to-action-icon1.png" alt=""> </div>
        </div>
        <div class="text css-table">
          <div class="css-table-cell">
            <h4>Effektiv neue Kunden und mobile Survey!</h4>
            <p>400% mehr Scanns! 25% mehr Umsatz! Inklusive Branding und Tracking!</p>
          </div>
          <div class="css-table-cell"> <a href="getleads.php" class="btn btn-default-red  pad-bottom">Über GetLeads</a> </div>
          <div class="css-table-cell"> <a href="kontakt.php" class="btn btn-default-red-inverse pad-top">Kontakt</a> </div>
        </div>
      </div>
      <!-- end .call-to-action-section --> 
    </div>
    <!-- end .container --> 
    <!-- end purchase GetLeads section  --> 
    
    <!-- start .category box section -->
  
      <div class="category-boxes-icons">
      <div class=" container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center" >
                <div class="category-boxes-item" style="height: auto; width: auto;   padding: 0px;">
             <figure>  <img class="img-responsive center-block" src="img/content/qr-starbucks.png">

             </figure>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12  text-center">
              <div class="category-boxes-item" style="height: auto; width: auto;  padding: 0px;">
            <figure> 
             <img class="img-responsive center-block" src="img/content/qr-xpizza.png">
            </figure>
             
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center" >
              <div class="category-boxes-item" style="height: auto; width: auto;   padding: 0px;">
           <figure> 
            <img class="img-responsive center-block" src="img/content/kfc.png">
           </figure>
              </div>
           
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
              <div class="category-boxes-item" style="height: auto; width: auto;  padding: 0px;">
             <figure> 
             <img class="img-responsive center-block" src="img/content/qr-burgerking.png">
             </figure>
              </div>
          </div>
        </div>
        <!-- end .row --> 
      </div>
      <!-- end .category-boxes-icons --> 
    </div>
    <!-- container --> 
    
    <!-- star.chef-welcome -->
    <div class="chef-welcome">
      <div class="container">
        <h1>GetLeads bringt effektiv<br />
          neue Kunden</h1>
        <p>Dank GetLeads bis zu 400% mehr Scans. Die kreative Lösung bietet einen neuen Weg, offline neue Kunden zu gewinnen.</p>
        <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> weiterlesen</a> </div>
      <!-- end .container --> 
    </div>
    <!--end .chef-welcome--> 
    
    <!--start small-slide section -->
    <div id="sm-slide-section">
      <div class="container">
        <div class="slide-heading text-center">
          <h4>Was unsere Kunden sagen</h4>
        </div>
        <!--end .clients heading-->
        <div id="slide-content" class="owl-carousel">
          <div class="item"> <img src="img/content/sm-slide-img1.png" alt="img-1">
            <div class="details">
              <h5><a href="#">jane doe</a> </h5>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
              </ul>
              <p>NEW - Testimonials folgt</p>
            </div>
          </div>
          <!-- end item class div-->
          
          <div class="item"> <img src="img/content/sm-slide-img-2.png" alt="img-2">
            <div class="details">
              <h5><a href="#">chrich woods</a> </h5>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
                <li><a href="#"><i class="fa fa-star"></i></a> </li>
              </ul>
              <p>NEW - Testimonials folgt</p>
            </div>
          </div>
          <!-- end item class div--> 
          
        </div>
        <!-- end i.slide-content --> 
      </div>
      <!-- end .container--> 
    </div>
    <!-- end .sm-slide-section--> 
    
    <!--Start blog feed section-->
    <div class="latest-from-blog text-center">
      <div class="container">
        <h4>Aktuelle Kampagnen - Coming Soon</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="blog-latest">
              <div class="row">
                <div class="col-md-6 col-sm-12"> <img class="" src="img/content/blog-post-1.png" alt="blog-image"> </div>
                <div class="col-md-6 col-sm-12">
                  <h5><a href="#">Coming Soon</a> </h5>
                  <p><i class="fa fa-clock-o"></i> <span class="date">27.6.2014</span>at <span class="time">17.33</span> </p>
                  <p class="bl-sort">Immer ein Gewinn!</p>
                  <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Webseite</a> </div>
                <!--end .blog-details--> 
              </div>
              <!--end .row--> 
            </div>
            <!--end .blog-latest --> 
          </div>
          <!--end grid layout-->
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="blog-latest">
              <div class="row">
                <div class="col-md-6 col-sm-12"> <img class="" src="img/content/blog-post-2.png" alt="blog-image"> </div>
                <div class="col-md-6 col-sm-12">
                  <h5><a href="#">Coming Soon</a> </h5>
                  <p><i class="fa fa-clock-o"></i> <span class="date">27.6.2014</span>at <span class="time">17.33</span> </p>
                  <p class="bl-sort">Immer ein Gewinn!</p>
                  <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Webseite</a> </div>
                <!--end .blog-details--> 
              </div>
              <!--end .row--> 
            </div>
            <!--end .blog-latest --> 
          </div>
          <!--end grid layout-->
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="blog-latest">
              <div class="row">
                <div class="col-md-6 col-sm-12"> <img class="" src="img/content/blog-post-3.png" alt="blog-image"> </div>
                <div class="col-md-6 col-sm-12">
                  <h5><a href="#">Coming Soon</a> </h5>
                  <p><i class="fa fa-clock-o"></i> <span class="date">27.6.2014</span>at <span class="time">17.33</span> </p>
                  <p class="bl-sort">Immer ein Gewinn!</p>
                  <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Webseite</a> </div>
                <!--end .blog-details--> 
              </div>
              <!--end .row--> 
            </div>
            <!--end .blog-latest --> 
          </div>
          <!--end grid layout-->
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="blog-latest">
              <div class="row">
                <div class="col-md-6 col-sm-12"> <img class="" src="img/content/blog-post-4.png" alt="blog-image"> </div>
                <div class="col-md-6 col-sm-12">
                  <h5><a href="#">Coming Soon</a> </h5>
                  <p><i class="fa fa-clock-o"></i> <span class="date">27.6.2014</span>at <span class="time">17.33</span> </p>
                  <p class="bl-sort">Immer ein Gewinn!</p>
                  <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Webseite</a> </div>
                <!--end .blog-details--> 
              </div>
              <!--end .row--> 
            </div>
            <!--end .blog-latest --> 
          </div>
          <!--end grid layout--> 
        </div>
        <!--end .row main--> 
        <!-- read older button -->
        <div class="read-older"> <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Weitere Kampagnen</a> </div>
      </div>
      <!--end container--> 
    </div>
    <!--end .latest-from-blog--> 
    
  </div>
  <!-- end #page-content --> 
  <!--footer start-->
  <?php include('footer.php'); ?>
  <!-- end #footer --> 
  
</div>
<!-- end #main-wrapper --> 
<!-- Scripts --> 
<!-- CDN jQuery --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<!-- Local jQuery --> 
<script>
	window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
	</script> 
<script src="js/masterslider/masterslider.min.js"></script> 
<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/bootstrap.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="js/jquery.ui.map.js"></script> 
<script src="js/scripts.js"></script> 
<script>

var slider = new MasterSlider();
slider.setup('masterslider', {
	  width           : 1140,
      height          : 500,
      space           : 5,
	  fullwidth		  : true,
      start           : 1,
      grabCursor      : true,
      swipe           : true,
      mouse           : true,
      layout          : "fullwidth",
      wheel           : false,
      autoplay        : true,
      instantStartLayers:true,
      loop            : true,
      shuffle         : false,
      preload         : 0,
      heightLimit     : true,
      autoHeight      : false,
      smoothHeight    : true,
      endPause        : false,
      overPause       : true,
      fillMode        : "fill",
      centerControls  : false,
      layersMode      : "center",
      hideLayers      : false,
      fullscreenMargin: 0,
      speed           : 10,
      parallaxMode    : 'swipe',
      view            : "basic"
});


	</script>
</body>
</html>
