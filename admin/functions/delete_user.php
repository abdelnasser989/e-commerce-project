<?php
require_once 'connect.php';


  $id = $_GET['id'];

$delete = "DELETE FROM users WHERE id = '$id'";
$connect ->query($delete);
header('location:../users.php');