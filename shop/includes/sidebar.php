<?php
        if (isset($_SESSION['cid'])) { ?>
            <div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <?php $cart = isset($_SESSION['cart'])? count($_SESSION['cart']) : 0; ?>
          <li class="nav-item">
            <?php if (isset($_POST['add_to_cart'])) {
              echo '
            <a title="Order" class="nav-link" href="cart.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            Cart</a>';
            }else{
              echo '
              <a title="Order" class="nav-link" href="cart.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            Cart <span class="text-danger">'.$cart.'</span></a>';
            }
            ?>
        </li>
        <li class="nav-item">
          <a title="List of Orders" class="nav-link" href="order.php">
            <i class="fas fa-fw fa-th-list"></i>
            <span>List of Orders</span></a>
        </li>


      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
       <?php  }else{ ?>
       <div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a title="Order" class="nav-link" href="cart.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a>
        </li>
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
     <?php }
         ?>

      <!-- Sidebar -->


