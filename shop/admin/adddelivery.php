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
    <div class="modal fade" id="logoutModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

<?php
$query = "SELECT * FROM tblcustomer";
$result = mysqli_query($db,$query);
$query3 = "SELECT * FROM tblemployee";
$result3 = mysqli_query($db,$query3);



?>

            <!-- Page Heading -->
            <div class="container">
        <div class="card-header" style="background-color: white"><center><h3>Add Delivery</h3></center></div>
        <div class="card-body">
 <form role="form" method="post" action="insertcustomer.php?action=add">


                             <div class="form-group">
                              <input class="form-control" type="hidden" value="<?php echo $_SESSION['userid'] ?>" name="user">
                            </div>
                            <div class="form-group">
                              <input  class="form-control" placeholder="Customer Id" name="C_ID" required="required">
                              </div>

                            <div class="form-group">
                              <input class="form-control" placeholder="Employee Id" name="EMP_ID" required="required">
                              </div>

                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="ADDRESS" name="ADDRESS" required="required">
                              </div>
                            <div class="form-group">
                              <input type="number" maxlength="11" class="form-control" placeholder="PNUMBER" name="P_NUMBER" required>
                            </div>
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>
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







<?php include 'adddelivery.php'; ?>








