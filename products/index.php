<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include 'includes/session.php'; ?>
<div id="preload" class="preloader">
</div>
<?php include 'includes/header.php'; ?>
<body class="hold-transition layout-top-nav">
	<?php include 'category.php'; ?>
	      <!-- Main content -->
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
  	<?php include '../footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/links.php' ?>
<script>
    $(document).ready(function() {
        $('#preload').load(function() {
        });
    });
</script>
</body>
</html>