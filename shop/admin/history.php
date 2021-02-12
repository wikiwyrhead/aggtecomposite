<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>

<div class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="right_col" role="main">

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>History Log</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable" class="table table-striped table-bordered table_list">
                                    <thead>
                                        <tr>
                                            <th>History Id</th>
                                            <th>Product id</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $query = ("SELECT history.*,tblproducts.*
                        FROM tblproducts LEFT JOIN
                      history ON tblproducts.product_id = history.h_id WHERE tblproducts.date_in");


                                         $result = mysqli_query($db, $query) or die (mysqli_error($db));
                                             while ($row = mysqli_fetch_assoc($result)){

                                            $date_in = date("F d, Y h:i A", strtotime($row['dated_in']));
                                    ?>
                                        <tr><td><?php echo $row['h_id'];?></td>
                                           <td><?php echo $row['product_id'];?></td>

                                            <td><?php echo $date_in;?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="message_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Message</h4>
                        </div>
                        <div class="modal-body" id="body_message">
                            null
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm confirm_delete">CONFIRM</button>
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php include 'theme/footer.php'; }?>

