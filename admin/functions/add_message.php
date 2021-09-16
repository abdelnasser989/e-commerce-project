<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'connect.php';

 $first_name = $_POST['Xf_name'];    
 $last_name  = $_POST['Xl_name'];     
 $email      = $_POST['X_email'];     
 $subject    = $_POST['X_subject'];    
 $message    = $_POST['X_message'];


 $insert_message = "INSERT INTO message (first_name,last_name,email,subject,message)

 VALUES('$first_name','$last_name','$email','$subject','$message')";
 $connect -> query($insert_message);
}