
<?php include('../includes/connection.php');?>
<!--header area-->
<?php include 'theme/header.php'; ?>
<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>




                <!-- Page Heading -->

                <!-- /.row -->
<?php
$query = 'SELECT C_ID,concat(C_FNAME," ",C_LNAME)as name,C_AGE,C_ADDRESS,C_PNUMBER,C_GENDER,C_EMAILADD,ZIPCODE FROM tblcustomer
              WHERE
              C_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {

               $i = $row['name'];
               $b = $row['C_AGE'];
               $d = $row['C_ADDRESS'];
                $p = $row['C_PNUMBER'];
               $g = $row['C_GENDER'];
               $e = $row['C_EMAILADD'];
               $z = $row['ZIPCODE'];


              }

              $id = $_GET['id'];

?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Customer Detail</div>
        <div class="card-body">

            <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Customer Name: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $i; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Age: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $b; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
               <td align="center" width="20%"><b style="font-size: 30px">Address: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $d; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
               <td align="center" width="20%"><b style="font-size: 30px">Phone Number: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $p; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
               <td align="center" width="20%"><b style="font-size: 30px">Gender: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $g; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>

              <td align="center" width="20%"><b style="font-size: 30px">Email Address: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $e; ?></a>
              </td>
            </tr>
        <br>
        <br>
        <tr>
           <td align="center" width="20%"><b style="font-size: 30px">Zipcode: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $z; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>


                    </div>
                </div>
                </div>




<?php include 'theme/footer.php'; ?>



