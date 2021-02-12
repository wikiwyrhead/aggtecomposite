  <?php
        if (isset($_SESSION['userid'])) {
          if ($_SESSION['position']=='Admin') {
           echo '
<div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
               <li class="nav-item">
          <a title="Admins" class="nav-link" href="user.php">
            <i class="fas fa-fw fa-user-secret"></i>
            <span>Users</span></a>
        </li>

        <li class="nav-item">
          <a title="Employees" class="nav-link" href="employee.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Employees</span></a>
        </li>
        <li class="nav-item">
          <a title="Customers" class="nav-link" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span></a>
        </li>
         <li class="nav-item">
          <a title="Supplier" class="nav-link" href="supplier.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Supplier</span></a>
        </li>
        <li class="nav-item">
          <a title="Products" class="nav-link" href="product.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Products</span></a>
        </li>
         <li class="nav-item">
          <a title="Delivery" class="nav-link" href="delivery.php">
            <i class="fas fa-fw fa-car"></i>
            <span>Delivery</span></a>
        </li>


        <li class="nav-item">
          <a title="Transaction" class="nav-link" href="detail.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaction</span></a>
        </li>

         <li class="nav-item">
          <a title="History" class="nav-link" href="history.php">
            <i class="fas fa-fw fa-user-book"></i>
            <span>History</span></a>
        </li>

         <li class="nav-item">
          <a title="Reports" class="nav-link" href="reports.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Reports</span></a>
        </li>

        <li class="nav-item">
          <a title="Inventory" class="nav-link" href="productin.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Inventory</span></a>
        </li>

      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
';
          }
          elseif ($_SESSION['position']=='Encoder') {
             echo '
<div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a title="Employees" class="nav-link" href="employee.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Employees</span></a>
        </li>
        <li class="nav-item">
          <a title="Customers" class="nav-link" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span></a>
        </li>
         <li class="nav-item">
          <a title="Supplier" class="nav-link" href="supplier.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Supplier</span></a>
        </li>
        <li class="nav-item">
          <a title="Products" class="nav-link" href="product.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Products</span></a>
        </li>
         <li class="nav-item">
          <a title="Delivery" class="nav-link" href="delivery.php">
            <i class="fas fa-fw fa-car"></i>
            <span>Delivery</span></a>
        </li>


        <li class="nav-item">
          <a title="Transaction" class="nav-link" href="detail.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaction</span></a>
        </li>

      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
';

         }
        }
         ?>

      <!-- Sidebar -->





















