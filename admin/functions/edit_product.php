<?php
require_once 'connect.php';

if(!isset($_POST['submit'])){


    header('location:../index.php');
    exit();
}



$id = $_POST['id'];
$product = $_POST['product'];
$sellar = $_POST['sellar'];
$client = $_POST['client'];
$price = $_POST['price'];
$brand = $_POST['brand'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$img = $_POST['img'];
$description = $_POST['description'];

$update_product = "UPDATE  product SET  products = '$product', sellar = '$sellar', client = '$client' 
, price = '$price' , brand = '$brand' , address = '$address' , phone = '$phone' , img = '$img' , 
description = '$description' WHERE id = '$id'";

$connect ->query($update_product);

header('location:../product.php');