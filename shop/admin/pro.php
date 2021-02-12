<?php include('includes/connection.php');?>

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>


<!-- Product Tables -->
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
              <h2>Products <a href="#" data-toggle="modal" data-target="#logoutModal1" type="button" class="btn btn-lg btn-info fas fa-plus"> Add New</a></h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped"id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Original Price</th>
                                        <th>Markup</th>
                                        <th>Selling Price</th>
                                        <th>Date In</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Encoder</th>
                                        <th>Product Code</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = 'SELECT a.`product_id`, a.`product_name`, sum(a.`quantity`) as quantity,sum(a.`available`) as available, a.`price`, a.`profit`,a.`selling_price`,a.`date_in`,d.`category`,b.`supplier_name`,concat(c.`fname`," ",c.`lname`)as name,a.`product_code`,a.`status`FROM `tblproducts`a,`tblsupplier`b,`tblusers`c,`tblcategory`d WHERE a.`supplier_id` = b.`supplier_id` AND a.`user_id` = c.`user_id` AND a.`category_id` = d.`category_id` GROUP BY a.`product_code`';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['product_id'].'</td>';
                            echo '<td>'. $row['product_name'].'</td>';
                            echo '<td>'. $row['quantity'].'</td>';
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['profit'].'</td>';
                            echo '<td>'. $row['selling_price'].'</td>';
                            echo '<td>'. $row['date_in'].'</td>';
                            echo '<td>'. $row['category'].'</td>';
                            echo '<td>'. $row['supplier_name'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['product_code'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>  ';
                            echo ' <a title="Update Product" type="button" class="btn btn-lg btn-warning fas fa-edit" href="updateproduct.php?action=edit & id='.$row['product_code'].'"></a> </td>';
                           /* echo ' <a title="Delete Product" type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="deleteproduct.php?type=product&delete & id=' . $row['product_id'] . '"></a></td>';*/
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
<?php include 'addproduct.php'; ?>
