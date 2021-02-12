 <?php include('includes/connection.php');?>

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

 <?php
 if (isset($_GET["action"])) {
  if ($_GET["action"]=='delete') {
    foreach ($_SESSION["cart"] as $keys => $values) {
      if ($values['ids']==$_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Product is Remove")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
}
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["cart"] as &$value){
    if($value['ids'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after found the product
    }
}


}
?>

 <div class="card mb-3">
            <div class="card-header">
              <center><h2 class="fas fa-shopping-cart">Cart(s)</h2></center>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table " width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                      <th>Image</th>
                                        <th>Product</th>
                                        <th width="300">Quantity</th>
                                        <th width="300">Price</th>
                                        <th>Total</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($_SESSION["cart"])) {
                                  $_SESSION['mm']=0;
                                  foreach($_SESSION["cart"] as $keys => $values){
                                    ?>
                                    <tr>
                                      <td><img src="images/images.png" style="width: 100px"></td>
                                      <td><?php echo $values["name"]; ?></td>
                                      <td><?php echo $values["quantity"]; ?></td>
                                      <td>&#8369 <?php echo $values["price"]; ?></td>
                                      <td>&#8369 <?php echo $values["quantity"] * $values["price"]; ?></td>
                                      <td><a class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')" href="cart.php?action=delete&id=<?php echo $values["ids"]; ?>">Remove</a></td>
                                    </tr>
                                    <?php
                                    $name= $values["name"];


                                    $_SESSION['mm'] = $_SESSION['mm'] + ($values["quantity"] * $values["price"]);

                                  }
                                  ?>

                             </tbody>
                             <tr>
                               <td colspan="4" align="right">Total Price</td>
                                  <td align="left">&#8369 <?php echo $_SESSION['mm']; ?></td>
                                  <td><a type="button" class="btn btn-success" href="addprod.php" >Proceed and Checkout</a></td>
                             </tr>
                               <?php
                                }
                                 ?>
                              </table>
                        </div>

            </div>

          </div>


        </div>
        <?php include 'includes/footer.php'; ?>
