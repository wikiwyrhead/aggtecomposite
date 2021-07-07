<?php require_once 'cart_modals.php'; ?>
<?php
	$conn = $pdo->open();
  $where = '';
  $stmt = $conn->prepare("SELECT * FROM category");
  $stmt->execute();
  $crow = $stmt->fetch();
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE category_id ='.$catid;
  }
  $pdo->close();
?>

<div class="wrapper">
<?php include '../header.php'; ?>
<br><br>
	    <div class="container">
		<div class="divHandle" style="margin-top: 15px;">
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner3.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
				</div>
	      <!-- Main content -->
	      <section class="content">
	        <div class="col-sm-9">
			<div class="groupCommon" style="margin-top: -20px;margin-bottom: 20px;">
			<h1 value="0" class="page-header" style="margin-top: 20px">
			<?php 
			$conn = $pdo->open();
			$stmt = $conn->prepare("SELECT * FROM category");
			$stmt->execute();
			if(empty($catid)){
				unset($catid);
				echo "Products";
			}
			else {
				foreach($stmt as $crow) {
					if($crow['id'] == $catid) {
						echo $crow['name'];
					}
				} 
			}
			?>
			</h1>
            <!-- Comment -->
			<div class="pull-left">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM category");
                        $stmt->execute();

                        foreach($stmt as $crow){
                          $selected = ($crow['id'] == $catid) ? 'selected' : ''; 
                          echo "
                            <option value='".$crow['id']."' ".$selected.">".$crow['name']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                  </div>
                </form>
              </div><br><br>
				</div>
		       		<?php
		       			$conn = $pdo->open();
		       			try{
		       			 	$inc = 4;	
						    $stmt = $conn->prepare("SELECT * FROM products $where");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5 style='text-align: left !important;'><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer' style='margin-top: 30px;'>
		       									<b>&#x20b1; ".number_format($row['price'], 2)." / Item"."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
						$pdo->close();
		       		?> 
	        	</div>
				<div class="col-sm-3">
				<?php include 'includes/sidebar.php'; ?>
				<?php
	        			if(isset($_SESSION['cart'])){
							if(count($_SESSION['cart']) != 0) {
							echo"
								<a class='buttonProdView' data-dismiss='modal' aria-label='Close' data-toggle='modal' data-target='.prodModal'><i class='fa fa-list'></i> View Products for Quotation</a>
	        					";
							}
						}
	        		?>
	        </div>
	        </div>
	  </div>
<?php include 'admin/includes/scripts.php'; ?>
<script>
$('#select_category').change(function(){
    var val = $(this).val();
    if(val == 0){
		window.location = '/products/';
    }
    else{
		window.location = '/products/?category='+val;
    }
  });
</script>
</html>