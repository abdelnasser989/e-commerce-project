<?php
session_start();
 require_once 'connect.php';

 $prod_id = $_POST['x_prod_id'];
 $id_client = $_POST['x_clint_id'];


 $delete_shop_cart = "DELETE FROM shopping_cart WHERE client_id = '$id_client' AND product_id='$prod_id'";

 $connect ->query($delete_shop_cart);
 header('location:../../cart.php');
 