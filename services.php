<?php if (isset($_SESSION['C_ID']))?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>AGGTE WPC Cladding & Decking</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="AGGTE WPC Cladding & Decking">
<meta name="keywords" content="AGGTE ,WPC, Composites, AGG, GoGreen, Cladding, Decking, Gates, Wood Plastic Composite">
<meta name="author" content="Janzen Go">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Fav Icon -->
<link class="logoicon" rel="shortcut icon" href="images/iconfast.png">
<!-- Style CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="dist/color-default.css">
<link rel="stylesheet" href="dist/color-switcher.css">
<link href="css/magnific-popup.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/style_slider.css" rel="stylesheet">
<link href="css/modal-designs.css" rel="stylesheet">
<link href="rs-plugin/css/settings.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body onload="unLoad()" style="overflow-x: hidden">
    <!-- Load Facebook SDK for JavaScript -->
<?php include 'fbplug.php'; ?>
<!--Load Facebook SDK for JavaScript End Here-->
<div class="page-wrapper">
  <!--preloader start-->
  <div class="preloader"></div>
  <!--preloader end-->
    <!--main-header start-->
        <?php include 'header.php'; ?>
    <!--main-header-end-->
  <!--inner-heading start-->
  <section class="inner-heading">
    <div class="container">
      <h1>Service</h1>
      <ul class="xs-breadcumb">
        <li><a href="index.php"> Home / </a> <a href="index.php">Pages /</a> Services</li>
      </ul>
    </div>
  </section>
  <!--inner-heading end-->

  <!--inner content start-->
    <iframe class="invisible" id="section-handler1" onload="Focus3()"></iframe>
    <iframe class="invisible" id="section-handler2" onload="Focus2()"></iframe>
    <iframe class="invisible" id="section-handler3" onload="Focus1()"></iframe>
    <iframe class="invisible" id="section-handler4" onload="Focus4()"></iframe>
  <section class="inner-wrap serviceSingleserviceSingle" id="service-main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="single-service">
            <div class="special-links">
              <ul>
                <li><a id="decking-button" style="border-left: 4px solid;border-left-color: #228b22;color: #228b22" onclick="Focus2()">WPC Decking</a></li>
                <li><a id="cladding-button" onclick="Focus3()">WPC Cladding</a></li>
                  <li><a id="gates-button" onclick="Focus1()">WPC Gates</a></li>
                <li><a id="repair-button" onclick="Focus4()">WPC Repair</a></li>
              </ul>
            </div>
          </div>
          <div class="single-service">
            <div class="sec-title" id="sec-title">
              <h2>Download<span> brochure</span></h2>
              <span>Here is some useful documents</span> </div>
            <ul class="brochure-btns">
              <li><a href="files/Price-List.pdf" class="clearfix" download="product" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Pricelist</span> </a></li>
              <li><a href="files/Product-Brochure.pdf" class="clearfix" download="Brochure" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-8" id="gate-service">
          <div id="main" role="main">
            <div class="slider">
              <div class="flexslider innerslider">
                <ul class="slides">
                  <li data-thumb="images/services/gate1.jpg"> <img src="images/services/gate1.jpg" alt=""/> </li>
                  <li data-thumb="images/services/gate2.jpg"> <img src="images/services/gate2.jpg" alt=""/> </li>
                  <li data-thumb="images/services/gate3.jpg"> <img src="images/services/gate3.jpg" alt=""/> </li>
                  <li data-thumb="images/services/gate4.jpg"> <img src="images/services/gate4.jpg" alt=""/> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>Our WPC Gates</h3>
           <p>If you are also looking for materials that will help to protect your property and privacy, AGGTE is also here to the rescue because we also supply the newest composite gate materials that are surely designed to last!</p>

            <p>
                You will surely stand out from your neighbors with the AGGTE composite gate panels. It comes in different designs and given such premise, we are very much sure and confident that our gates will add more beauty and contemporary touch to your exterior.
            </p>
        </div>
          <div class="col-md-8" id="decking-service">
          <div id="main" role="main">
            <div class="slider">
              <div class="flexslider innerslider">
                <ul class="slides">
                  <li data-thumb="images/services/decking0.jpg"> <img src="images/services/decking0.jpg" alt=""/> </li>
                  <li data-thumb="images/services/decking1.jpg"> <img src="images/services/decking1.jpg" alt=""/> </li>
                  <li data-thumb="images/services/decking2.jpg"> <img src="images/services/decking2.jpg" alt=""/> </li>
                  <li data-thumb="images/services/decking3.jpg"> <img src="images/services/decking3.jpg" alt=""/> </li>
                </ul>
              </div>
            </div>
          </div>
          <div href="#decking"><h3>Our WPC Decking</h3></div>
              <p>
                An excellent composite decking product will provide any outdoor space with a genuine-modern finish, including a wide variety of features that will ensure your protection and peace of mind in the years to come, thus, giving you the privilege of enjoying the sight of your deck area.
              </p>
              <p>
                We have specified here every detail of our range of product and laid-down their key features. This section of our site will generally give you more information that will give you a concrete idea on the different product features that definitely see AGGTE miles away from its competitors and will lead you to the right direction in choosing for the ideal supplier of your construction needs.
              </p>
        </div>
          <div class="col-md-8" id="cladding-service">
          <div id="main" role="main">
            <div class="slider">
              <div class="flexslider innerslider">
                <ul class="slides">
                  <li data-thumb="images/services/cladding1.jpg"> <img src="images/services/cladding1.jpg" alt=""/> </li>
                  <li data-thumb="images/services/cladding2.jpg"> <img src="images/services/cladding2.jpg" alt=""/> </li>
                  <li data-thumb="images/services/cladding3.jpg"> <img src="images/services/cladding3.jpg" alt=""/> </li>
                  <li data-thumb="images/services/cladding4.jpg"> <img src="images/services/cladding4.jpg" alt=""/> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>Our WPC Cladding</h3>
          <p>Exterior composite wall cladding has the capability of making your property look completely refreshed. It is sometimes referred to as house cladding or wall cladding. This material can instantly give a modern make-over on your exteriors.  With this type of cladding material, you can make the facade of your homes and buildings blend into your gardens or make you the style of your contemporary domestic or commercial property stand out from the others.</p>
              <p>AGGTE supply high-quality cladding to cover your exterior walls which can improve the kerb appeal of your homes and commercial buildings in an instant.</p>

          <!--google.com/search?q=opun&rlz=1C1CHBF_enNL897NL897&oq=opun&aqs=chrome..69i57j46i433j46l3j0j46.1688j0j7&sourceid=chrome&ie=UTF-8&safe=active<h3>Features</h3>
          <ul class="featureLinks">
            <li>Donec elementum pharetra dapibus</li>
            <li>Nam dictum vestibulum diam</li>
            <li>Orci varius natoque penatibus et magnis</li>
            <li>Proin facilisis ante in turpis venenatis</li>
            <li>Vestibulum lectus ex, faucibus</li>
            <li>Morbi efficitur elit ac dolor porttitor</li>
            <li>Fusce rhoncus vehicula lacus vitae</li>
            <li>Sed porttitor risus vitae justo gravida</li>
          </ul>-->
        </div>
          <div class="col-md-8" id="repair-service">
          <div id="main" role="main">
            <div class="slider">
              <div class="flexslider innerslider">
                <ul class="slides">
                  <li data-thumb="images/services/repair1.jpg"> <img src="images/services/repair1.jpg" alt=""/> </li>
                  <li data-thumb="images/services/repair2.jpg"> <img src="images/services/repair2.jpg" alt=""/> </li>
                  <li data-thumb="images/services/repair3.jpg"> <img src="images/services/repair3.jpg" alt=""/> </li>
                  <li data-thumb="images/services/repair4.jpg"> <img src="images/services/repair4.jpg" alt=""/> </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>Our WPC Repair Service</h3>
              <p>Having the right decking, cladding and fencing is only the first part of the installation process, with high-quality trims and fixings playing a vital part to ensure your project is completed properly and give the finishing touch. At AGGTE, we have a range of decking fixings and composite trims to ensure the job is done properly.</p>

              <p>
                  Whatever the style and purpose of your project, you’ll find the right composite trims and composite fixings here to be able to confidently complete it in no time.
              </p>

          <!--google.com/search?q=opun&rlz=1C1CHBF_enNL897NL897&oq=opun&aqs=chrome..69i57j46i433j46l3j0j46.1688j0j7&sourceid=chrome&ie=UTF-8&safe=active<h3>Features</h3>
          <ul class="featureLinks">
            <li>Donec elementum pharetra dapibus</li>
            <li>Nam dictum vestibulum diam</li>
            <li>Orci varius natoque penatibus et magnis</li>
            <li>Proin facilisis ante in turpis venenatis</li>
            <li>Vestibulum lectus ex, faucibus</li>
            <li>Morbi efficitur elit ac dolor porttitor</li>
            <li>Fusce rhoncus vehicula lacus vitae</li>
            <li>Sed porttitor risus vitae justo gravida</li>
          </ul>-->
        </div>
      </div>
    </div>
  </section>
  <!--inner content end-->
    <!--footer-sec-start-->
      <?php include 'footer.php'; ?>
    <!--footer-sec-end-->
</div>
<!--scroll-to-top start-->
<!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>-->
<!--scroll-to-top end-->

<!--jquery start-->
<script src="js/jquery-2.1.4.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.fancybox8cbb.js?v=2.1.5"></script>
<script src="js/owl.carousel.js"></script>
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/counter.js"></script>
<script src="dist/color-switcher.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>
<script src="js/messageCounter.js"></script>
<script>

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!--jquery end-->
</body>

</html>
