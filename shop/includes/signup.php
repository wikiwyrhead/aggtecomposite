<?php
if (isset($_POST['signups-submit'])) {

require 'connection.php';

$C_FNAME = $_POST['C_FNAME'];
$C_LNAME = $_POST['C_LNAME'];
$C_AGE = $_POST['C_AGE'];
$C_ADDRESS = $_POST['C_ADDRESS'];
$C_PNUMBER = $_POST['C_PNUMBER'];
$C_GENDER = $_POST['C_GENDER'];
$C_EMAILADD = $_POST['C_EMAILADD'];
$ZIPCODE = $_POST['ZIPCODE'];
$username = $_POST['username'];
$password = $_POST['password'];
$passcon = $_POST['pwdcon'];

if (empty($C_FNAME)||empty($C_LNAME)||empty($C_AGE)||empty($C_ADDRESS)||empty($C_PNUMBER)||empty($C_GENDER)||empty($C_EMAILADD)||empty($ZIPCODE)||empty($username)||empty($password)) {
	header("Location: ../register.php?error=emptyfields&firstname=".$C_FNAME."&lastname=".$C_LNAME.
	"&mail=".$C_EMAILADD."&uid=".$username);
	exit();
}
elseif (!filter_var($C_EMAILADD, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../register.php?error=invalidmail&uid=");
	exit();
}
else if (!filter_var($C_EMAILADD, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../register.php?error=invalidmail&uid=".$username);
	exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../register.php?error=invaliduid&C_EMAILADD=".$C_EMAILADD);
	exit();
}
else if ($password !== $passcon) {
	header("Location: ../register.php?error=passwordcheck&C_FNAME=".$C_FNAME."&C_LNAME=".$C_LNAME.
	"&mail=".$C_EMAILADD."&uid=".$username);
	exit();
}
else{
	$sql = "SELECT * FROM tblcustomer WHERE username=? or C_EMAILADD=?";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../register.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$username,$C_EMAILADD);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location: ../register.php?error=usertaken&error=emailtaken");
			exit();
		}
		else{
			$sql = "INSERT INTO `tblcustomer`(`C_FNAME`, `C_LNAME`, `C_AGE`, `C_ADDRESS`, `C_PNUMBER`, `C_GENDER`, `C_EMAILADD`, `ZIPCODE`, `username`, `password`)VALUES(?,?,?,?,?,?,?,?,?,?)";
			mysqli_stmt_execute($stmt);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../register.php?error=sqlerror");
			exit();
		}else{
			$hashedPwd =password_hash($password,PASSWORD_DEFAULT);

			mysqli_stmt_bind_param($stmt,"ssssssssss",$C_FNAME,$C_LNAME,$C_AGE,$C_ADDRESS,$C_PNUMBER,$C_GENDER,$C_EMAILADD,$ZIPCODE,$username,$hashedPwd);
			mysqli_stmt_execute($stmt);

			?>
			<script type="text/javascript">
				alert("register successful");
				window.location = "../login.php";
			</script>


			<?php
			exit();
			}
		}
	}
}
mysqli_stmt_close($stmt);
mysqli_close($db);

}
else{
	header("Location: ../register.php");
	exit();
}
?>
