<?php

require_once 'connect.php';

if(!isset($_POST['submit'])){


    header('location:../users.php');
    exit();
}

$id = $_POST['id'];
$username = $_POST['username'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$faqulty = $_POST['faqulty'];
$Preveleges = $_POST['Preveleges'];
$password = $_POST['password'];
if(!empty($password)){

 $update_password = " UPDATE practice  SET password = '$password' WHERE id = '$id'";
 $connect -> query($update_password);

}

$update = "UPDATE  practice SET  username = '$username' , address = '$address' , phone = '$phone',
  email = '$email' , password = '$password' , priv = '$priv' , gender = '$gender' , religion = '$religion',
  faqulty = '$faqulty' , Preveleges = '$Preveleges' WHERE id = '$id'";

  $connect ->query($update);

  header('location:../users.php');