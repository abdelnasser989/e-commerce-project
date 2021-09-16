<?php
$current ="messages";
include 'design/header.php';
include 'design/sidebar.php';
require_once 'functions/connect.php';


?>

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">messages</a>
          </li>
          <li class="breadcrumb-item active">messages</li>
        </ol>
      </div>
      <?php
      

      if(!isset($_GET['do'])){

           include 'includes/messages_view.php';
      }
      
      
      ?>


<?php

include 'design/footer.php';
?>