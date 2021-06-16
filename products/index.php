<html>
<!--
<script>
function redirect() {
	window.location.href = window.origin+"/products/index.php?category=cladding";
}
</script>-->

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav" onload="redirect()">
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
	  <div class="content-wrapper">
	    <div class="container">
	      <!-- Main content -->
	      <section class="content" style="margin-top: 15px;">
	        <div class="row">
			<?php include 'category.php'; ?>
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        	</div>
	        </div>
	      </section>
	    </div>
	  </div>
  	<?php include '../footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/links.php' ?>
</body>
</html>