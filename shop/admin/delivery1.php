<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>

          <div class="card mb-3">
            <div class="card-header">
              <h2>Delivery </h2>
           <!--    <a href="#" data-toggle="modal" data-target="#logoutModal5" class="btn btn-lg btn-info fas fa-plus"> Add New</a>  -->
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped"id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Delivery ID</th>
                                        <th>Customer Name</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                          <th>Date to Deliver</th>
                                        <th>Product Number</th>
                                        <th>Order Date</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Detail</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT * FROM tbldelivery';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {


                            echo '<tr>';
                            echo '<td>'. $row['D_ID'].'</td>';
                                echo '<td>'. $row['C_FNAME']. ', '. $row['C_LNAME'].'</td>';
                           // echo '<td>'. .'</td>';
                            echo '<td>'. $row['C_AGE'].'</td>';
                            echo '<td>'. $row['C_ADDRESS'].'</td>';
                            echo '<td>'. $row['C_PNUMBER'].'</td>';
                            echo '<td>'. $row['C_GENDER'].'</td>';
                            echo '<td>'. $row['C_EMAILADD'].'</td>';
                            echo '<td>'. $row['ZIPCODE'].'</td>';
                            echo '<td>  ';
                            echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-user-tag" href="orderdetail.php?action=view & id='.$row['D
                            _ID'] . '"></a> ';


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

<?php include 'theme/footer.php'; }?>
