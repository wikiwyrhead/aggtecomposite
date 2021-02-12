<?php

       include('../includes/connection.php');


        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
						$date = $_POST['date'];
					    $cus = $_POST['customer'];
					    $date2 = $_POST['date2'];
						$contct = $_POST['contact'];
						$address = $_POST['address'];

					switch($_GET['action']){
						case 'add':
								$query = "INSERT INTO tbltransac
								(transac_id,date,customer_id,delivery_date,contact,address)
								VALUES ('Null','".$date."','".$cus."','".$date2."','$contct','".$address."')";
								mysqli_query($db,$query)or die ('Error in updating Database');

						break;

						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "transaction.php";
		</script>
</body>
</html>
