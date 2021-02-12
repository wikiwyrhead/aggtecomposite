
<?php include('includes/connection.php');?>

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<?php
$query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name,delivery_date,C_PNUMBER,C_ADDRESS FROM tbltransacdetail a inner join tblcustomer b on a.`customer_id`=b.`C_ID`
              WHERE  transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $stat = $row['status'];
               $name = $row['name'];
               $del = $row['delivery_date'];
               $contact = $row['C_PNUMBER'];
               $address = $row['C_ADDRESS'];
               $cd = $row['transac_code'];
              }

?>
 <span id="divToPrint">
 <div class="card">

            <div class="card-header">
              <div style="margin-bottom: 30px">
             <center><h2>Agri-Trading</h2><p style="font-size: 20px">Brgy.Enclaro Binalbagan City <br> Negros Occidental</p></center>
         </div>
              <?php if ($stat == 'Confirmed') {
                ?>

         <ul>
             <div  style="margin-bottom: 30px">
            <h5>Order No.# : 0<?php echo $cd; ?></h5>
            <h5>Name : <?php echo $name; ?></h5>
            <h5>Contact : 0<?php echo $contact; ?></h5>
            <h5>Address : <?php echo $address; ?></h5>
            <h5>Date to Deliver : <?php echo $del; ?></h5>

        </div>
            <?php  }else{
              ?>
              <h5>Your order is on process. Please check your list of order for notification of confirmation.</h5>
           <?php } ?>


            <div class="card-body">
              <div class="table-responsive">
                            <table cellpadding="4" width="100%" cellspacing="0">
                                <thead align="left">
                                    <tr>
                                        <th>Product</th>
                                        <th>OrderDate</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                $query = "SELECT b.product_name,a.date,a.qty,a.price,a.total FROM tbltransac a,tblproducts b WHERE a.product_code=b.product_code AND a.transac_code='".$_GET['id']."' GROUP BY a.product_code";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['product_name'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>'. $row['qty'].'</td>';
                            echo '<td>&#8369 '. $row['price'].'</td>';
                            echo '<td>&#8369 '. $row['total'].'</td>';
                           /* echo '<td>  ';
                            echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
                            echo '</tr> ';
                }
            ?>

                                </tbody>
                                           <?php
$query = 'SELECT * FROM tbltransacdetail
              WHERE
              transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $zz = $row['totalprice'];
              }

?>

                                <tr>
                                  <td colspan="4" align="right"><br><h5> Subtotal :</h5></td>
                                  <td ><br><h5> &#8369 <?php echo $zz-150; ?></h5></td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="right"><h5> Delivery Fee :</h5></td>
                                  <td ><h5> &#8369 150</h5></td>

                                </tr>
                                  <tr>
                                  <td colspan="4" align="right"><h5> Total :</h5></td>
                                  <td ><h5> &#8369 <?php echo $zz; ?></h5></td>
                                </tr>

                            </table>
                            <?php
            $result = mysqli_query($db, "SELECT * FROM tbltransacdetail
              WHERE transac_code =".$_GET['id']) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $stats = $row['status'];
              }

                             if ($stats=='Confirmed') {
                             ?>
                             <h5>Please print this as a proof of purchased</h5>
                            <p> We hope you enjoy your purchased products. Have a nice day!</p>

                            <p> Sincerely.</p>

                           <h4>Agri-Trading</h4>
                           <?php }else{

                           } ?>
                        </div>
            </div>

        <!--   <h5 align="right" style="margin-right: : 150px">Total Price : &#8369 <?php echo $zz; ?></h5> -->
          </div>




        </div><br>
</ul>
</span>
             <a href="order.php" class="btn btn-xs btn-info fas fa-arrow-left" ">Back</a>
             <?php
             if ($stats=='Confirmed') {
               ?>
               <a href="#" class="btn btn-xs btn-info fas fa-print" value="print" onclick="PrintDiv();">Print</a>
            <?php }
              ?>

        <?php include 'includes/footer.php'; ?>


        <script type="text/javascript">
    function PrintDiv() {
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
