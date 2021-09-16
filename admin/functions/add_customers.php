<?php


require_once 'connect.php';


if(!isset($_POST['submit'])){

    header('location:signup.php');
    exit();
}


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];



$password = $_POST['password'];
$password_hashed = password_hash($password,PASSWORD_DEFAULT);

$select_exsist_email ="SELECT *FROM customers_sinup WHERE email = '$email'";
$result_exsist_email = $connect ->query($select_exsist_email);

$counter = $result_exsist_email ->num_rows;

if($counter > 0){

    header('location:../../404.php');
}
else{
    


$add_client = "INSERT INTO customers_sinup (first_name,last_name,email,password,phone,address)
VALUES
('$first_name','$last_name','$email','$password_hashed','$phone','$address')";

$connect -> query($add_client);

header('location:../../login.php');
}
