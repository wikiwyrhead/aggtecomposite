
<?php include('../includes/connection.php');?>

<!--header area-->
<?php include 'theme/header.php'; ?>

<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>

<!--breadcrumbs area-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Client</li>
          </ol>


<!-- CustomerTables -->
<?php
if(!isset($_SESSION["userid"])){
 header("Location: index.php");
}
else{
?>
<?php
}
?>
<div class="card mb-3">
            <div class="card-header">
              <h2>Client </h2> <!-- <a href="#" data-toggle="modal" data-target="#logoutModal2"  type="button" class="btn btn-lg btn-info fas fa-user-plus"> Add New</a> -->
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped"id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Sex</th>
                                        <th>Birthday</th>
                                        <th>Citizenship</th>
                                        <th>Address</th>
                                        <th>Membership Fee</th>
                                        <th>View Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT * FROM tblusers WHERE position="Client"';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['client_id'].'</td>';
                            echo '<td>'. $row['fname'].'</td>';
                            echo '<td>'. $row['mname'].'</td>';
                            echo '<td>'. $row['lname'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['sex'].'</td>';
                            echo '<td>'. $row['birthday'].'</td>';
                            echo '<td>'. $row['citizenship'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['membership_fee'].'</td>';
                            echo '<td>'. $row['view_status'].'</td>';
                            echo '<td>'. $row['created_at'].'</td>';
                            echo '<td>'. $row['modified_at'].'</td>';
                            echo '<td>  ';
                            echo ' <a title="Update Client" type="button" class="btn btn-lg btn-warning fas fa-user-edit" href="updateclient.php?action=edit & id='.$row['user_id'] . '"></a> </td>';
                           /* echo ' <a title="Delete Customer" type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="deletecustomer.php?type=customer&delete & id=' . $row['customer_id'] . '"></a> ';*/
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
<?php include 'addclient.php'; ?>
