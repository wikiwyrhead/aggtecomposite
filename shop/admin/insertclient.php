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
						$fname = $_POST['fname'];
						$mname = $_POST['mname'];
					    $lname = $_POST['lname'];
					    $email = $_POST['email'];
						$contct = $_POST['contact'];
						$sex = $_POST['sex'];
						$birthday = $_POST['birthday'];
						$citizenship = $_POST['citizenship'];
						$address = $_POST['address'];
						$membership = $_POST['membership_fee'];
						$status = $_POST['view_status'];
						$create = $_POST['created_at'];
						$modified = $_POST['modified_at'];

					switch($_GET['action']){
						case 'add':
								$query = "INSERT INTO tblclient
								(client_id,fname,mname, lname, email,contact,sex,birthday,citizenship,address,membership_fee,view_status,created_at,modified_at)
								VALUES ('Null','".$fname."','".$mname."','".$lname."','".$email."','"$contct"','".$sex."','".$birthday."','".$citizenship."','".$address."','".$membership."','".$status."','".$create."','".$modified."')";
								mysqli_query($db,$query)or die ('Error in updating Database');

						break;

						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "client.php";
		</script>
</body>
</html>
