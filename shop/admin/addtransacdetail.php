
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
$query = 'SELECT * FROM tbltransac
              WHERE
              transac_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $zz = $row['transac_id'];

              }

              $id = $_GET['id'];
$query2 = "SELECT * FROM tblproducts GROUP BY unqid";
$result2 = mysqli_query($db,$query2);
?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Transaction Detail</div>
        <div class="card-body">

                        <form role="form" method="post" action="updatecustomer1.php">

                            <a>Transac ID:</a>
                            <div class="form-group">
                                <input class="form-control" type="text" name="id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                               <a>Products:</a>
                              <select class="form-control"name="customer">
                                <?php while($row2 = mysqli_fetch_array($result2)):; ?>
                              <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?> </option>
                              <?php endwhile; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Price" name="lastname" >

                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="Email" >
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Total" name="Contact">
                            </div>


                            <button type="submit" class="btn btn-default">Update</button>



                      </form>
                    </div>
                </div>
                </div>




<?php include 'theme/footer.php'; ?>



