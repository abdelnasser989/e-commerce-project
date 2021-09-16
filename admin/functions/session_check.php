<?php
require_once 'connect.php';

$select_client ="SELECT *FROM customers_sinup WHERE email = '$email'";
$result_client = $connect ->query($select_client);
$row_client = $result_client ->fetch_assoc();


$id = $row_client['id'];
$counter = $result_client ->num_rows;
$password_mysql = $row_client['password'];

if(password_verify($password,$password_mysql)){


    if($counter > 0){
        
       
        $_SESSION['client'] = $id;
      
    
    }    


}