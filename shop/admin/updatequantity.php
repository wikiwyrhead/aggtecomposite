<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';

$query = 'SELECT * FROM `tblproducts`WHERE `product_code` = '.$_GET['id'].' ';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $quantity = $row['quantity'];

              }
              $id = $_GET['id'];
?>
<style type="text/css">
  .error-msg{
  text-align: center;
  font-weight: bold;
}
</style>
      <div class="container">
      <div class="card card-register mx-auto mt-2">
        <div class="card-header">Update Quantity</div>
        <div class="card-body">
<form role="form" method="post" action="productcontroller.php?action=updatequantity">
           <?php
          if (isset($_GET['required'])) {
            if ($_GET["required"]=="quant") {
              echo '<p class="error-msg text-danger">Invalid quantity</p>';
            }
            }      ?>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <div class="form-group">
                              <span>Update Quantity</span>
                              <input class="form-control" type="number" placeholder="Quantity" name="quantity" value="0">
                            </div>

                            </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Update</button>
                      </form>
                    </div>
                </div>
                </div>
<!-- <script src="vendor/jquery/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(e){
    $('input').change(function(){
      var toplam=0;
      $('input[id=price]').each(function(){
        toplam = toplam + parseInt($(this).val());
      })
      $('input[id=sale]').val(toplam);
    });

  });
</script> -->
           <!--footer area-->
<?php include 'theme/footer.php'; }?>
