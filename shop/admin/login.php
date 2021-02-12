<?php
if (isset($_POST['login-submit'])) {
 include('../includes/connection.php');

 $mailuid = $_POST['mailuid'];
 $pass = $_POST['pwd'];

if (empty($mailuid)||empty($pass)) {
  header("Location: login.php?error=emptyfields");
  exit();
}
else{
  $sql = "SELECT * FROM tblusers WHERE username=? OR email=?;";
  $stmt = mysqli_stmt_init($db);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
  header("Location: login.php?error=sqlerror");
  exit();
  }
  else{
    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $pwdCheck = password_verify($pass,$row['pass']);
      if ($pwdCheck == false) {
      header("Location: login.php?error=wrongpwd");
      exit();
      }
      elseif ($pwdCheck == true) {
        session_start();
        $_SESSION['userid'] = $row['user_id'];
        $_SESSION['useruid'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['position'] = $row['position'];
        header("Location: index.php?login=success");
        exit();
      }
      else{
        header("Location: login.php?error=wrongpwd");
        exit();
      }
    }
    else{
      header("Location: login.php?error=nouser");
      exit();
    }
  }
}

}?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/sb-new.css">
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h3> Login</h3></div>
        <div class="card-body">
         <?php session_start();
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="wrongpwd") {
              echo '<p class="signuperror">Wrong password</p>';
            }

            }


           ?>
          <form action="login.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="mailuid" class="form-control" placeholder="Email/Username" required autofocus="autofocus">
                <label for="inputEmail">Email/Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="login-submit">Login</button>
          </form>
          <div class="text-center"><!--
            <a class="d-block small mt-3" href="register.php">Signup</a>
            <a class="d-block small mt-3" href="index.php">Home</a> -->
          </div>
        </div>
      </div>
    </div>

 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
