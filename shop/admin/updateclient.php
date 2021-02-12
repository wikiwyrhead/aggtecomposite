
<?php include('../includes/connection.php');?>
<!--header area-->
<?php include 'theme/header.php'; ?>
<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>

<?php
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}
else{
?>

<?php
}
?>


                <!-- Page Heading -->

                <!-- /.row -->
<?php
$query = 'SELECT * FROM tblclient
              WHERE
              user_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $zz = $row['client_id'];
               $i = $row['fname'];
               $m = $row['mname'];
               $a = $row['lname'];
               $b = $row['email'];
               $d = $row['contact'];
               $s = $row['sex'];
               $day = $row['birthday'];
               $ship = $row['citizenship'];
               $c = $row['address'];
               $d = $row['membership_fee'];
               $d = $row['view_status'];
               $d = $row['created_at'];
               $d = $row['modified_at'];





              }

              $id = $_GET['id'];

?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update Client</div>
        <div class="card-body">

                        <form role="form" method="post" action="updateclient1.php">

                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="fname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Middle Name" name="mname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lname" value="<?php echo $a; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="email" value="<?php echo $b; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="contact" value="<?php echo $d; ?>">
                            </div>
                             <div class="form-group">
                              <input class="form-control" placeholder="Sex" name="sex" value="<?php echo $d; ?>">
                            </div>
                             <div class="form-group">
                              <input class="form-control" placeholder="Birthday" name="birthday" value="<?php echo $d; ?>">
                            </div>
                             <div class="form-group">
                              <input class="form-control" placeholder="Citizenship" name="citizenship" value="<?php echo $d; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Membership Fee" name="membership_fee" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="View Status" name="view_status" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Created" name="created_at" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="modified" name="modified_at" value="<?php echo $c; ?>">
                            </div>

                            <button type="submit" class="btn btn-default">Update</button>



                      </form>
                    </div>
                </div>
                </div>




<?php include 'theme/footer.php'; ?>



