<?php
$current ="users";
include  'design/header.php';
include  'design/sidebar.php';
require  'functions/connect.php';

?>


<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </div>



<?php


if(!isset($_GET['do'])){

    include 'includes/user_view.php';

    exit();

}


if($_GET['do'] = 'add' ){

  include 'includes/user_add.php';

  exit();
}

if($_GET['do'] = 'edit'){

  include 'includes/edit_user.php';

  exit();
}

?>

<?php

 include  'design/footer.php';

?>