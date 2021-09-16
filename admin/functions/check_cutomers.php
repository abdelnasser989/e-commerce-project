<?php
 session_start();
 if($_SESSION['login']){
    header('location:../../index.php');
    exit();
}

require_once 'connect.php';
if(!isset($_POST['submit'])){

    header('location:login.php');
    exit();
}

$email = $_POST['username'];

$password = $_POST['password'];



$select_client ="SELECT *FROM customers_sinup WHERE email = '$email'";
$result_client = $connect ->query($select_client);
$row_client = $result_client ->fetch_assoc();


$id = $row_client['id'];
$counter = $result_client ->num_rows;
$password_mysql = $row_client['password'];

if(password_verify($password,$password_mysql)){


    if($counter > 0){
        
       
        $_SESSION['login'] = $id;
        header("location:../../index.php");
    
    }    




}else{
    echo 'password  or email are wrong';
}



