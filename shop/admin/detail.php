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
              <h2>Transaction</h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Order No.#</th>
                                        <th>Customer</th>
                                        <th>Order Date</th>
                                        <th>Delivery Date</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name FROM tbltransacdetail a, tblcustomer b WHERE a.`customer_id`=b.`C_ID` ';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['transac_code'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                             echo '<td>'. $row['delivery_date'].'</td>';
                            echo '<td>'. $row['totalprice'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td><a title="View list Of Ordered" type="button" class="btn-sm btn-primary" href="detailtransac.php?id='. $row['transac_code'].'" >View </a></td>';



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
<?php include 'addtransac.php'; ?>
