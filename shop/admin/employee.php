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
              <h2> Employees <a href="employeeadd.php" class="btn btn-info fas fa-plus"> Add New</a></h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th> Age</th>
                                        <th>Position</th>
                                        <th>Hired date</th>
                                         <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT * FROM tblemployee';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['emp_id'].'</td>';
                            echo '<td>'. $row['fname']. ' '. $row['lname'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['gender'].'</td>';
                            echo '<td>'. $row['age'].'</td>';
                            echo '<td>'. $row['position'].'</td>';
                            echo '<td>'. $row['hire_date'].'</td>';
                             echo '<td>  ';
                            echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-user-tag" href="employeeupdate.php?action=view & id='.$row['emp_id'] . '"></a> ';




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


