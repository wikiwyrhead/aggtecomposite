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

            <!-- Page Heading -->
            <div class="container">
        <div class="card-header" style="background-color: white"><center><h3>Add Customer</h3></center></div>
        <div class="card-body">
 <form role="form" method="post" action="insertcustomer.php?action=add">

                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="C_FNAME" required autofocus="autofocus">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="C_LNAME" required>
                            </div>
                             <div class="form-group">
                              <input type="number" class="form-control" placeholder="Age" name="C_AGE" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="C_ADDRESS" required>
                            </div>
                            <div class="form-group">
                              <input type="" maxlength="11" class="form-control" placeholder="Phone number" name="C_PNUMBER" required>
                            </div>
                            <div class="form-group">
                              <input type="" id="Gender" class="form-control" placeholder="Gender" name="C_GENDER" required="required">
                              </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email Add" name="C_EMAILADD" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="zipcode" name="ZIPCODE" required>
                            </div>
                            <div class="form-group">
                  <div class="form-label-group">
                <input type="text" id="inputEmail1" name="uid" class="form-control" placeholder="User Name">
                <label for="inputEmail1">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
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








<?php include 'theme/footer.php'; ?>








