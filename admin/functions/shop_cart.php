<?php

session_start();
require_once 'connect.php';


$product_id = $_POST['y_cart'];

$client_id = $_SESSION['login'];

$select_cart = "SELECT *FROM shopping_cart WHERE client_id = '$client_id' AND product_id = '$product_id'";
$result_cart = $connect ->query($select_cart);
$count = $result_cart-> num_rows;

if($count > 0 ){

  $update_cart = "UPDATE shopping_cart SET count = count+1 WHERE client_id = '$client_id' AND product_id = '$product_id'";
  $connect ->query($update_cart);

}else{

    $insert_cart = "INSERT INTO shopping_cart (client_id,product_id,count)VALUES('$client_id','$product_id',1)";
    $connect ->query($insert_cart);
    
}