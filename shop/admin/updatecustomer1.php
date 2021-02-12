
<?php
						$C_ID = $_POST['C_ID'];
						$C_FNAME = $_POST['C_FNAME'];
						$C_LNAME = $_POST['C_LNAME'];
					    $C_AGE = $_POST['C_AGE'];
					    $C_ADDRESS = $_POST['C_ADDRESS'];
						$C_PNUMBER = $_POST['C_PNUMBER'];
						$C_GENDER = $_POST['C_GENDER'];
						$C_EMAILADD = $_POST['C_EMAILADD'];
						$ZIPCODE = $_POST['ZIPCODE'];

	   include('../includes/connection.php');

	 			$query = 'UPDATE tblcustomer set C_FNAME ="'.$C_FNAME.'",C_LNAME ="'.$C_LNAME.'",
					C_AGE ="'.$C_AGE.'", C_ADDRESS="'.$C_ADDRESS.'",
					C_PNUMBER='.$C_PNUMBER.',C_GENDER ="'.$C_GENDER.'",C_EMAILADD ="'.$C_EMAILADD.'",ZIPCODE ="'.$ZIPCODE.'" WHERE
					C_ID ="'.$C_ID.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "customer.php";
		</script>
