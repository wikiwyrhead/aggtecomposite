<?php
 // The same dapat ang input name sa Add kag Update.....WHAT THE MEN!
       include('../includes/connection.php');

       		if (isset($_POST['submit'])) {
       				$fname = $_POST['fname'];
						  $lname = $_POST['lname'];
						  $number = $_POST['numbers'];
						  $email = $_POST['email'];
					    $address = $_POST['address'];
					    $gender = $_POST['gender'];
					    $age = $_POST['age'];
					    $position = $_POST['position'];
					    $hire = $_POST['hire'];

			if ($_GET['action'] == 'add') {
        $result=mysqli_query($db,"SELECT * FROM tblemployee WHERE `contact`='".$number."'");
        $checkemploy=mysqli_num_rows($result);
			     if ($fname == "") {
              header("Location: employeeadd.php?required=firstname");
            }elseif ($checkemploy > 0 ) {
              header("Location: employeeadd.php?required=contactaken");
            }elseif ($lname == "") {
              header("Location: employeeadd.php?required=lastname");
            }elseif ($number == "" || $number < 0 ) {
              header("Location: employeeadd.php?required=number");
            }elseif (!preg_match("/^\d{11}+$/",$number)) {
              header("Location: employeeadd.php?required=invalidnumber");
            }elseif ($email == "") {
              header("Location: employeeadd.php?required=email");
            }elseif ($address == "") {
              header("Location: employeeadd.php?required=address");
            }elseif ($gender == "") {
              header("Location: employeeadd.php?required=gender");
            }elseif ($age == "" || $age < 0 ) {
              header("Location: employeeadd.php?required=age");
            }elseif ($position == "") {
              header("Location: employeeadd.php?required=position");
            }elseif ($hire == "") {
              header("Location: employeeadd.php?required=hire");
            }else{
            $query = "INSERT INTO `tblemployee`(`fname`, `lname`, `contact`, `email`, `address`, `gender`, `age`, `position`, `hire_date`) VALUES ('".$fname."','".$lname."','".$number."','".$email."','".$address."','".$gender."','".$age."','".$position."','".$hire."')";
				mysqli_query($db,$query)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Successfully added.");
				window.location = "employee.php";
				</script>
				<?php
		}
		}
		if ($_GET['action'] == 'update') {
			$id = $_POST['id'];
			       if ($fname == "") {
              header("Location: employeeupdate.php?required=firstname&id='".$id."'");
            }elseif ($lname == "") {
              header("Location: employeeupdate.php?required=lastname&id='".$id."'");
            }elseif ($number == "") {
              header("Location: employeeupdate.php?required=number&id='".$id."'");
            }elseif ($email == "") {
              header("Location: employeeupdate.php?required=email&id='".$id."'");
            }elseif ($address == "") {
              header("Location: employeeupdate.php?required=address&id='".$id."'");
            }elseif ($gender == "") {
              header("Location: employeeupdate.php?required=gender&id='".$id."'");
            }elseif ($age == "" || $age < 0 ) {
              header("Location: employeeupdate.php?required=age&id='".$id."'");
            }elseif ($position == "") {
              header("Location: employeeupdate.php?required=position&id='".$id."'");
            }elseif ($hire == "") {
              header("Location: employeeupdate.php?required=hire&id='".$id."'");
            }else{
            $query = "UPDATE `tblemployee` SET `fname`='".$fname."',`lname`='".$lname."',`contact`='".$number."',`email`='".$email."',`address`='".$address."',`gender`='".$gender."',`age`='".$age."',`position`='".$position."',`hire_date`='".$hire."' WHERE `emp_id` = '".$id."'";
				mysqli_query($db,$query)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Updated successfully.");
				window.location = "employee.php";
				</script>
				<?php
		}
		}
}
	?>
