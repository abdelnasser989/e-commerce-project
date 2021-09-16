<?php
 
include 'design/header.php';
include 'design/sidebar.php';
require_once 'functions/connect.php';
?>



<?php


if(!isset($_GET['do'])){

    include 'includes/blogs.php';
    exit();
}elseif($_GET['do']== 'add'){

    include 'includes/add_blogs.php';
    exit();
}elseif($_GET['do']== 'edit'){

    include 'includes/edit_blog.php';
    exit();
    
}elseif($_GET['do']=='delete'){

    include 'functions/delete_blogs.php';
    exit();
}

?>




<?php

include 'design/footer.php';

?>