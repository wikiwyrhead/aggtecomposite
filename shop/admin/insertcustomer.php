<?php

       require('../includes/connection.php');


        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
						$C_FNAME = $_POST['C_FNAME'];
						$C_LNAME = $_POST['C_LNAME'];
					    $C_AGE = $_POST['C_AGE'];
					    $C_ADDRESS = $_POST['C_ADDRESS'];
					    $C_PNUMBER = $_POST['C_PNUMBER'];
					    $C_GENDER = $_POST['C_GENDER'];
					    $C_EMAILADD = $_POST['C_EMAILADD'];
					    $ZIPCODE = $_POST['ZIPCODE'];



					switch($_GET['action']){
						case 'add':

									$query = "INSERT INTO tblcustomer
								(C_ID,C_FNAME,C_LNAME,C_AGE,C_ADDRESS,C_PNUMBER,C_GENDER,C_EMAILADD,ZIPCODE)
								VALUES ('Null','".$C_FNAME."','".$C_LNAME."','".$C_AGE."','".$C_ADDRESS."','".$C_PNUMBER."','".$C_GENDER."','".$C_EMAILADD."','".$ZIPCODE."')";
								mysqli_query($db,$query)or die(mysqli_error($db));



						break;

						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "customer.php";
		</script>
</body>
</html>
