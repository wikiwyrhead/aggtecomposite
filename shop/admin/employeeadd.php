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
        <div class="card-header"><center><h3>Add Employee</h3></center></div>
        <div class="card-body">
 <form role="form" method="post" action="employeecontroller.php?action=add">
    <?php
          if (isset($_GET['required'])) {
            if ($_GET["required"]=="firstname") {
              echo '<p class="error-msg text-danger">First name is required</p>';
            }elseif ($_GET["required"]=="contacttaken") {
               echo '<p class="error-msg text-danger">Contact Number is already taken</p>';
            }elseif ($_GET["required"]=="lastname") {
               echo '<p class="error-msg text-danger">Last name is required</p>';
            }elseif ($_GET["required"]=="number") {
               echo '<p class="error-msg text-danger">Contact number is required</p>';
            }elseif ($_GET["required"]=="invalidnumber") {
               echo '<p class="error-msg text-danger">Please Enter your Contact Number 11 digits</p>';
            }elseif ($_GET["required"]=="email") {
               echo '<p class="error-msg text-danger">Email is required</p>';
            }elseif ($_GET["required"]=="address") {
               echo '<p class="error-msg text-danger">Address is required</p>';
            }elseif ($_GET["required"]=="gender") {
               echo '<p class="error-msg text-danger">Gender is required</p>';
            }elseif ($_GET["required"]=="age") {
               echo '<p class="error-msg text-danger">Age is required</p>';
            }elseif ($_GET["required"]=="position") {
               echo '<p class="error-msg text-danger">Position is required</p>';
            }elseif ($_GET["required"]=="hire") {
               echo '<p class="error-msg text-danger">Hire date is required</p>';
            }
            }?>
          <div class="form-group">
          <input class="form-control" placeholder="First Name" name="fname" autofocus="autofocus">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Last Name" name="lname">
          </div>
          <div class="form-group">
          <input type="number"  class="form-control" placeholder="Phone number" name="numbers">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group">
          <input  class="form-control" placeholder="Address" name="address">
          </div>
          <div class="form-group">
          <select class="form-control" name="gender">
          <option disabled selected>Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
          </select>
          </div>
          <div class="form-group">
          <input type="number" class="form-control" placeholder="Age" name="age">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Position" name="position">
          </div>
          <div class="form-group">
          <input type="date" class="form-control" placeholder="Hire date" name="hire">
          </div>
          <button type="submit" name="submit" class="btn btn-info">Save Record</button>
          <button type="reset" class="btn btn-danger">Clear Entry</button>


                      </form>
                       </div>
                </div>
              </div>
       <?php include 'theme/footer.php'; }?>
