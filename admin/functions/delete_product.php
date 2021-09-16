<?php

require_once 'connect_product.php';


$id = $_GET['id'];

$delete_product = "DELETE FROM products WHERE id = '$id'";
$connect ->query($delete_product);
header('location:../product.php');