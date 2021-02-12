
<?php include('../includes/connection.php');?>
<!--header area-->
<?php include 'theme/header.php'; ?>
<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>




                <!-- Page Heading -->

                <!-- /.row -->
<?php
$query = 'SELECT user_id,concat(fname," ",lname)as name,email,username,position FROM tblusers
              WHERE
              user_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
               $zz = $row['user_id'];
               $i = $row['name'];
               $b = $row['email'];
               $d = $row['username'];
               $c = $row['position'];


              }

              $id = $_GET['id'];

?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Admin Detail</div>
        <div class="card-body">

            <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Admin Name: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $i; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Email: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $b; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Username: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $d; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Position: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $c; ?></a>
              </td>
            </tr>
        <br>
        <br>


                    </div>
                </div>
                </div>




<?php include 'theme/footer.php'; ?>



