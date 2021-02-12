  </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

                <?php
$query2 = 'SELECT current_date FROM tblusers';
            $result2 = mysqli_query($db, $query2) or die(mysqli_error($db));
              while($row2 = mysqli_fetch_array($result2))
              {
               $date = $row2['current_date'];
              }

$query3 = "SELECT * FROM tblcustomer";
$result3 = mysqli_query($db,$query3);


?>

             <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">New Transaction</div>
        <div class="card-body">

                        <form role="form" method="post" action="inserttransac.php?action=add">

                            <div class="form-group">
                              <a>Transaction Date:</a>
                              <input class="form-control" type="text" placeholder="Date" name="date" value="<?php echo $date; ?>" >
                            </div>
                            <div class="form-group">
                               <a>Customer:</a>
                              <select class="form-control" name="customer">
                                <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                              <option value="<?php echo $row3[0]; ?>"><?php echo $row3[1]; ?> <?php echo $row3[2]; ?></option>
                              <?php endwhile; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <a>Delivery Date:</a>
                              <input class="form-control" type="timestamp" placeholder="Delivery Date" name="date2" required>
                            </div>
                             <div class="form-group">
                              <a>Contact:</a>
                              <input class="form-control" type="number" placeholder="Contact" name="contact" required>
                            </div>
                             <div class="form-group">
                              <a>Address:</a>
                              <input class="form-control" type="text" placeholder="Address" name="address" required>
                            </div>

                            <button type="submit" name="add" class="btn btn-default">Add Transaction</button>



                      </form>
                    </div>
                </div>
                </div>

          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

<?php include 'theme/footer.php'; ?>














