<?php
if (isset($_POST['signup-submit'])) {

require 'connection.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['mail'];
$con = $_POST['con'];
$address = $_POST['addre'];
$pos = $_POST['pos'];
$username = $_POST['uid'];
$pass = $_POST['pwd'];
$passcon = $_POST['pwdcon'];

if (empty($fname)||empty($lname)||empty($email)||empty($username)||empty($pass)||empty($passcon)) {
	header("Location: ../useradd.php?error=emptyfields&firstname=".$fname."&lastname=".$lname.
	"&mail=".$email."&uid=".$username);
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../useradd.php?error=invalidmail&uid=");
	exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../useradd.php?error=invalidmail&uid=".$username);
	exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../useradd.php?error=invaliduid&mail=".$email);
	exit();
}
else if ($pass !== $passcon) {
	header("Location: ../useradd.php?error=passwordcheck&firstname=".$fname."&lastname=".$lname.
	"&mail=".$email."&uid=".$username);
	exit();
}
else{
	$sql = "SELECT * FROM tblusers WHERE username=? or email=?";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../useradd.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$username,$email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location: ../useradd.php?error=usertaken&error=emailtaken");
			exit();
		}
		else{
			$sql = "INSERT INTO tblusers(fname,lname,email,contact,address,position,username,pass)VALUES(?,?,?,?,?,?,?,?)";
			mysqli_stmt_execute($stmt);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../useradd.php?error=sqlerror");
			exit();
		}else{
			$hashedPwd =password_hash($pass,PASSWORD_DEFAULT);

			mysqli_stmt_bind_param($stmt,"ssssssss",$fname,$lname,$email,$con,$address,$pos,$username,$hashedPwd);
			mysqli_stmt_execute($stmt);

			?>
			<script type="text/javascript">
				alert("Successfully Added");
				window.location = "../user.php";
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
	header("Location: ../useradd.php");
	exit();
}
?>
