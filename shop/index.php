<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AGGTEDeck Products </title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link class="logoicon" rel="shortcut icon" href="favicon.ico">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
	<!-- Style CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="dist/color-default.css">
<link href="../css/magnific-popup.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet">
<link href="../css/owl.css" rel="stylesheet">
<link href="../css/jquery.fancybox.css" rel="stylesheet">
<link href="../css/style_slider.css" rel="stylesheet">
<link href="../css/modal-designs.css" rel="stylesheet">

<body>
<?php include '../header.php'; ?>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script src="../js/jquery.fancybox8cbb.js?v=2.1.5"></script>
<script src="../js/owl.carousel.js"></script>
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="../js/counter.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/script.js"></script>
<script src="../js/custom1.js"></script>
<script src="../js/messageCounter.js"></script>
</html>
















































