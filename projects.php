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
<link href="css/modal-designs.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/style_slider.css" rel="stylesheet">
<link href="rs-plugin/css/settings.css" rel="stylesheet">
</head>
<body>
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
      <h1>Project</h1>
      <ul class="xs-breadcumb">
        <li><a href="index.php"> Home  / </a> <a href="index.php">Pages / </a>Project </li>
      </ul>
    </div>
  </section>
  <!--inner-heading end-->
<!--portfolio-area start-->
<section class="bg-gray portfolio-area">
  <!--container start-->
  <div class="container-fluid">
    <div class="section-title">
      <h3>OUR RECENT <span>PORTFOLIOS</span></h3>
      <p><h4>Here's our latest and most commendable projects all throughout the years 2020-2021.</h4></p>
    </div>
    <!--row start-->
    <div class="row">
      <ul class="container-filter categories-filter">
        <li> <a class="categories hvr-link" data-filter="*" id="all1" onclick="Focus1()" style="background-color: darkgreen;color:white">All Projects</a> </li>
        <li> <a class="categories hvr-link" data-filter=".cladding" id="all2" onclick="Focus2()">Cladding</a> </li>
        <li> <a class="categories hvr-link" data-filter=".decking" id="all3" onclick="Focus3()">Decking</a> </li>
        <li> <a class="categories hvr-link" data-filter=".gates" id="all4" onclick="Focus4()">Gates</a> </li>
      </ul>
    </div>
    <!--row end-->
    <div class="portfolio-inner">
      <!--row start-->
      <ul class="row container-masonry  portfolio-posts grid">
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item grid-sizer gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_a.jpg" alt="img-1">
            <div class="caption">
              <h3>WPC Gate</h3>
              <p>Quezon City, Metro Manila</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_a.jpg" title="WPC Gates" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item grid-sizer gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_b.jpg" alt="img-3">
            <div class="caption">
              <h3>WPC Gate</h3>
              <p>Imus, Cavite</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_b.jpg" title="WPC Gate" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item branding cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_a.jpg" alt="img-4">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Alabang, Metro Manila</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_a.jpg" title="WPC Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking_d.jpg" alt="img-5">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Laguna</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking_d.jpg" title="WPC Decking" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/deckingnew.jpg" alt="img-6">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Alaminos Pangasinan</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/deckingnew.jpg" title="Poolside Decking" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_b.jpg" alt="img-7">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Orani, Bataan</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_b.jpg" title="WPC Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking_b.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Taal, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking_b.jpg" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_c.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Quezon City, Metro Manila</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_c.jpg" title="Accent Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
           <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking1.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Parañaque, Metro Manila</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking1.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_d.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Gates</h3>
              <p>Isabela</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_d.jpg" title="WPC Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a></div>
          </div>
        </li>
        <!--col end-->
           <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding1.png" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Cainta, Rizal</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding1.png" title="WPC Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a></div>
          </div>
        </li>
        <!--col end-->
                    <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking7.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Taal, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking7.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking_e.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nasugbu, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking_e.jpg" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
          <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_e.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Gates</h3>
              <p>Las Piñas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_e.jpg" title="WPC Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a></div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking6.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nayomi Resort, Balete Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking6.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_e.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Batangas City</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_e.jpg" title="Accent Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
        <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking5.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Quezon City  </p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking5.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking_f.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nueva Ecija</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking_f.jpg" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
                    <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking8.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Kawayan Cove, Nasugbu Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking8.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
          <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gatenew.png" alt="img-8">
            <div class="caption">
              <h3>WPC Gates</h3>
              <p>Olongapo City</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gatenew.png" title="WPC Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a></div>
          </div>
        </li>
        <!--col end-->
                    <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking2.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nasugbu, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking2.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding2.png" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Batangas City</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding2.png" title="Accent Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking3.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nasugbu, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking3.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking_g.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nueva Ecija</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking_g.jpg" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate1.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Taal, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate1.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking9.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Laguna</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking9.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
          <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_g.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Gates</h3>
              <p>Emilio Aguinaldo, Cavite</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_g.jpg" title="WPC Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a></div>
          </div>
        </li>
        <!--col end-->
           <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking10.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Parañaque</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking10.png" title="WPC Decking Lanai" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_g.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Imus, Cavite</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_g.jpg" title="Accent Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item decking">
          <div class="image-hover-effect-4"> <img src="images/gallery/decking/decking4.png" alt="img-8">
            <div class="caption">
              <h3>WPC Decking</h3>
              <p>Nasugbu, Batangas</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/decking/decking4.png" title="Accent Decking" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
          <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item gates">
          <div class="image-hover-effect-4"> <img src="images/gallery/gates/gate_h.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Gates</h3>
              <p>Parañaque, Metro Manila</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/gates/gate_h.jpg" title="Accent Gate" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
           <!--col start-->
        <li class="col-md-3 col-sm-6 col-xs-12 nf-item cladding">
          <div class="image-hover-effect-4"> <img src="images/gallery/cladding/cladding_h.jpg" alt="img-8">
            <div class="caption">
              <h3>WPC Cladding</h3>
              <p>Orani, Bataan</p>
            </div>
            <div class="link-wrap"> <a href="images/gallery/cladding/cladding_h.jpg" title="Accent Cladding" class="lightbox-image"><i class="fa fa-search"></i></a>  </div>
          </div>
        </li>
        <!--col end-->
      </ul>
      <!--row end-->

    </div>

  <!--container end-->
</section>
<!--portfolio-area end-->
    <!--footer-sec-start-->
      <?php include 'footer.php'; ?>
    <!--footer-sec-end-->
</div>
<!--scroll-to-top start-->
<!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>-->
<!--scroll-to-top end-->

<!--jquery start-->
<script src="js/jquery-2.1.4.min.js"></script>
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
<script src="js/messageCounter.js"></script>
<script src="js/navSorter.js"></script>
<script src="js/script.js"></script>
<!--jquery end-->
</body>

</html>
