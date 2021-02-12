<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';

$query = 'SELECT * FROM `tblemployee` WHERE `EMP_ID` = '.$_GET['id'].' ';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $id = $row['emp_id'];
               $fname = $row['fname'];
               $lname = $row['lname'];
               $number = $row['contact'];
               $email = $row['email'];
               $address = $row['address'];
               $gender = $row['gender'];
               $age = $row['age'];
               $position = $row['position'];
               $hire = $row['hire_date'];
              }
?>
<style type="text/css">
  .error-msg{
  text-align: center;
  font-weight: bold;
}
</style>
<div class="container">
  <div class="card card-register mx-auto mt-3">
        <div class="card-header"><center><h3>Update Employee</h3></center></div>
        <div class="card-body">
 <form role="form" method="post" action="employeecontroller.php?action=update">
    <?php
          if (isset($_GET['required'])) {
            if ($_GET["required"]=="firstname") {
              echo '<p class="error-msg text-danger">First name is required</p>';
            }elseif ($_GET["required"]=="lastname") {
               echo '<p class="error-msg text-danger">Last name is required</p>';
            }elseif ($_GET["required"]=="number") {
               echo '<p class="error-msg text-danger">Contact number is required</p>';
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
          <input type="hidden"  name="id"  value="<?php echo $id; ?>">
          <div class="form-group">
          <input class="form-control" placeholder="First Name" name="fname"  value="<?php echo $fname; ?>">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
          </div>
          <div class="form-group">
          <input type="number" maxlength="11" class="form-control" placeholder="Phone number" name="number" value="<?php echo $number; ?>">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
          <input  class="form-control" placeholder="Address" name="address" value="<?php echo $address; ?>">
          </div>
          <div class="form-group">
          <select class="form-control" name="gender">
          <option selected><?php echo $gender; ?></option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
          </select>
          </div>
          <div class="form-group">
          <input type="number" maxlength="2" class="form-control" placeholder="Age" name="age" value="<?php echo $age; ?>">
          </div>
          <div class="form-group">
          <input class="form-control" placeholder="Position" name="position" value="<?php echo $position; ?>">
          </div>
          <div class="form-group">
          <input type="date" class="form-control" placeholder="Hire date" name="hire" value="<?php echo $hire; ?>">
          </div>
          <button type="submit" name="submit" class="btn btn-info">Save Record</button>
          <button type="reset" class="btn btn-danger">Clear Entry</button>


                      </form>
                       </div>
                </div>
              </div>
       <?php include 'theme/footer.php'; }?>
