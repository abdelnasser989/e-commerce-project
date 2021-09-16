<?php

session_start();
session_regenerate_id();
require "connect.php";

if(!isset($_POST['submit'])){
header("location:login.php");
exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$select_user = "SELECT * FROM users WHERE email = '$email'";
$result_users = $connect -> query($select_user);
$row_user = $result_users -> fetch_assoc();

$id = $row_user['id'];
$counter = $result_users -> num_rows;
$password_mysql = $row_user['password'];

if(password_verify($password,$password_mysql)){

    $select_byPass = "SELECT * FROM users WHERE password ='$password_mysql'";

    if($connect -> query($select_byPass)){


        if($counter > 0){

            $_SESSION['dashbord'] = $id;
            header("location:../users.php");
 
        }



    }

}else{
 echo "Email Or Password was wronge";
 echo "<br>";
 echo "<a href='../login.php' class='btn btn-primarys'>Back</a>";
}