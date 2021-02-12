
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
$query = 'SELECT * FROM tblcustomer
              WHERE
              C_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $C_ID = $row['C_ID'];
               $C_FNAME = $row['C_FNAME'];
               $C_LNAME = $row['C_LNAME'];
               $C_AGE = $row['C_AGE'];
               $C_ADDRESS = $row['C_ADDRESS'];
               $C_PNUMBER = $row['C_PNUMBER'];
               $C_GENDER = $row['C_GENDER'];
               $C_EMAILADD = $row['C_EMAILADD'];
               $ZIPCODE = $row['ZIPCODE'];





              }

              $id = $_GET['id'];

?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update Customer</div>
        <div class="card-body">

                        <form role="form" method="post" action="updatecustomer1.php">

                            <div class="form-group">
                                <input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>" />
                            </div>
                            <div class="form-group">
                              <a>First Name:</a>
                              <input class="form-control" placeholder="" name="C_FNAME" value="<?php echo $C_FNAME; ?>">
                            </div>

                            <div class="form-group">
                              <a>Last Name:</a>
                              <input class="form-control" placeholder="Last Name" name="C_LNAME" value="<?php echo $C_LNAME; ?>">
                            </div>
                            <div class="form-group">
                              <a>Age:</a>
                              <input class="form-control" placeholder="Age" name="C_AGE" value="<?php echo $C_AGE; ?>">
                            </div>
                            <div class="form-group">
                              <a>Address:</a>
                              <input class="form-control" placeholder="Address" name="C_ADDRESS" value="<?php echo $C_ADDRESS; ?>">
                            </div>
                             <div class="form-group">
                              <a>Phone Number:</a>
                              <input class="form-control" placeholder="Phone number" name="C_PNUMBER" value="<?php echo $C_PNUMBER; ?>">
                            </div>
                             <div class="form-group">
                              <a>Gender:</a>
                              <input class="form-control" placeholder="Gender" name="C_GENDER" value="<?php echo $C_GENDER; ?>">
                            </div>
                             <div class="form-group">
                              <a>Email Address:</a>
                              <input class="form-control" placeholder="Email Address" name="C_EMAILADD" value="<?php echo $C_EMAILADD; ?>">
                            </div>
                            <div class="form-group">
                              <a>Zipcode:</a>
                              <input class="form-control" placeholder="zipcode" name="ZIPCODE" value="<?php echo $ZIPCODE; ?>">
                            </div>

                            <button type="submit" class="btn btn-default">Update</button>



                      </form>
                    </div>
                </div>
                </div>




<?php include 'includes/footer.php'; ?>



