<?php
$current ="product";
include 'design/header.php';
include 'design/sidebar.php';
require_once 'functions/connect.php';



?>

 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Product</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </div>

<?php

if(!isset($_GET['do'])){

  include 'includes/product_view.php';
}

elseif($_GET['do'] == 'add'){


  include 'includes/product_add.php';


}
elseif($_GET['do'] == 'edit' ){


   include 'includes/product_edit.php';
}

?>

<?php
 include 'design/footer.php'; 

?>

