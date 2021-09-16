<?php

require_once 'connect.php';

if(!isset($_POST['submit'])){


    header('location:../users.php');
    exit();

}




$username = $_POST['username'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $password = $_POST['password'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$faqulty = $_POST['faqulty'];
$Preveleges = $_POST['Preveleges'];


$password = $_POST['password'];
$password_hashed = password_hash($password,PASSWORD_DEFAULT);



 

$insert  = " INSERT INTO  users (username,address,phone,email,password,priv,gender,religion,faqulty,Preveleges)
 VALUES 
 ('$username','$address','$phone','$email','$password_hashed','$priv','$gender','$religion','$faqulty','$Preveleges')";

  $connect -> query($insert);

  header('location:../users.php');