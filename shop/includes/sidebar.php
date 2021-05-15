<?php
        if (isset($_SESSION['cid'])) { ?>
            <div id="wrapper">
         <ul class="sidebar navbar-nav">
        <?php $cart = isset($_SESSION['cart'])? count($_SESSION['cart']) : 0; ?>
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
       <?php  }else{ ?>
       <div id="wrapper">
      </ul>
         <div id="content-wrapper">
     <?php }
         ?>

      <!-- Sidebar -->


