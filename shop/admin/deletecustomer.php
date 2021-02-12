

<?php include('includes/connection.php');?>

<body>
<?php



			if (!isset($_GET['do']) || $_GET['do'] != 1) {


			switch ($_GET['type']) {
				case 'customer':
					$query = 'DELETE FROM tblcustomer
							WHERE
							customer_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "customer.php";
			</script>

			<?php
			//break;
				}
			}
			?>

</body>
</html>
