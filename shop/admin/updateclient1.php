
<?php
						$zz = $_POST['id'];
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

	   include('../includes/connection.php');

	 			$query = 'UPDATE tblclient set fname ="'.$fname.'",mname ="'.$mname.'",
					lname ="'.$lname.'", email="'.$email.'",
					contact='.$contct.',sex ="'.$sex.'",birthday ="'.$birthday.'",citizenship ="'.$citizenship.'",address ="'.$address.'",membership_fee="'.$membership.'",view_status ="'.$status.'",created_at ="'.$create.'",modified_at ="'.$modified.'" WHERE
					user_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "client.php";
		</script>
