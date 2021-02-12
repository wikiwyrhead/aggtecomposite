<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>
<style type="text/css">
  .error-msg{
  text-align: center;
  font-weight: bold;
}
</style>
<div class="container">
  <div class="card card-register mx-auto mt-3">
        <div class="card-header"><center><h3>Add User</h3></center></div>
        <div class="card-body">
          <?php
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="emptyfields") {
              echo '<p class="text-danger error-msg">Fill in all fields</p>';
            }
            elseif ($_GET["error"]=="invalidmail") {
               echo '<p class="text-danger error-msg">Invalid Email</p>';
            }
            elseif ($_GET["error"]=="invaliduid") {
               echo '<p class="text-danger error-msg">Invalid Username</p>';
            }
            elseif ($_GET["error"]=="passwordcheck") {
               echo '<p class="text-danger error-msg">Your password do not match</p>';
            }
            elseif ($_GET["error"]=="usertaken") {
               echo '<p class="text-danger error-msg">Username is already taken</p>';
            }
            elseif ($_GET["error"]=="emailtaken") {
               echo '<p class="text-danger error-msg">Email/Username is already taken</p>';
            }
            }


           ?>
 <form action="theme/signup.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name"autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="mail" class="form-control" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <select type="text" id="inputEmail2" name="pos" class="form-control" placeholder="Position">
                  <option>Encoder</option>
                  <option>Admin</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputContact" name="con" class="form-control" placeholder="Email address">
                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputAddress" name="addre" class="form-control" placeholder="Email address">
                <label for="inputAddress">Address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail1" name="uid" class="form-control" placeholder="User Name">
                <label for="inputEmail1">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signup-submit">Save</button>
          </form>
                       </div>
                </div>
                </div>
<!--footer area-->
<?php include 'theme/footer.php'; }?>
