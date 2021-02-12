<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
 include('../includes/connection.php');
 include 'theme/header.php';
 include 'theme/sidebar.php';

$query = 'SELECT * FROM tblsupplier
              WHERE
              supplier_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $zz = $row['supplier_id'];
               $i = $row['supplier_name'];
               $a = $row['contact'];
               $b = $row['email'];
               $d = $row['address'];



              }

              $id = $_GET['id'];

?>
<style type="text/css">
  .error-msg{
  text-align: center;
  font-weight: bold;
}
</style>
         <div class="container">
          <div class="card card-register mx-auto mt-5">
           <div class="card-header">Update Supplier</div>
             <div class="card-body">

              <form role="form" method="post" action="suppliercontroller.php?action=update">
                 <?php
          if (isset($_GET['required'])) {
            if ($_GET["required"]=="name") {
              echo '<p class="error-msg text-danger"> Supplier name is required</p>';
            }elseif ($_GET["required"]=="contact") {
               echo '<p class="error-msg text-danger"> Contact number is required</p>';
            }elseif ($_GET["required"]=="email") {
               echo '<p class="error-msg text-danger"> Email is required</p>';
            }elseif ($_GET["required"]=="address") {
               echo '<p class="error-msg text-danger"> Address is required</p>';
            }
            }      ?>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Supplier Name" name="supplier" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="contact" value="<?php echo $a; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="email" value="<?php echo $b; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $d; ?>">
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Update</button>
                      </form>
                    </div>
                </div>

<!--footer area-->
<?php include 'theme/footer.php'; }?>
