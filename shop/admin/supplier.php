<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>

<!-- Supplier Tables -->

          <div class="card mb-3">
            <div class="card-header">
              <h2>Suppliers <a href="supplieradd.php" type="button" class="btn btn-info fas fa-plus"> Add New</a></h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped"id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Supplier Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                         <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT * FROM tblsupplier';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['supplier_id'].'</td>';
                            echo '<td>'. $row['supplier_name'].'</a></td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                             echo '<td>  ';
                            echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-pen" href="supplierupdate.php?action=view & id='.$row['supplier_id'] . '"></a> ';


                            echo '</tr> ';
                }
            ?>

                                </tbody>
                            </table>
                        </div>
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->

<!--footer area-->
<?php include 'theme/footer.php'; ?>
<?php } ?>
