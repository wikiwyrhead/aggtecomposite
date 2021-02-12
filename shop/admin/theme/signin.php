<?php
if (isset($_POST['login-submit'])) {
	require 'connection.php';

 $mailuid = $_POST['mailuid'];
 $pass = $_POST['pwd'];

if (empty($mailuid)||empty($pass)) {
	header("Location: ../login.php?error=emptyfields");
	exit();
}
else{
	$sql = "SELECT * FROM tblusers WHERE username=? OR email=?;";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../login.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($result)) {
			$pwdCheck = password_verify($pass,$row['pass']);
			if ($pwdCheck == false) {
			header("Location: ../login.php?error=wrongpwd");
			exit();
			}
			elseif ($pwdCheck == true) {
				session_start();
				$_SESSION['userid'] = $row['user_id'];
				$_SESSION['useruid'] = $row['username'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['contact'] = $row['contact'];
				$_SESSION['position'] = $row['position'];
				header("Location: ../index.php?login=success");
				exit();
			}
			else{
				header("Location: ../login.php?error=wrongpwd");
				exit();
			}
		}
		else{
			header("Location: ../login.php?error=nouser");
			exit();
		}
	}
}

}
else{
	header("Location: ../index.php");
	exit();
	}
