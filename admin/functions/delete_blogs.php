<?php

require_once 'connect.php';

$id=$_GET['id'];


$delete_blog = "DELETE FROM blog WHERE id ='$id'";

$connect ->query($delete_blog);
header('location:../blogs.php');
