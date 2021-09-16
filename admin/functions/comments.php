<?php

require_once 'connect.php';


$id = $_POST['x_comment_id'];
$comment = $_POST['x_comment'];
$name_comment = $_POST['x_name_comment'];
$email_comment = $_POST['x_email_comment'];


$insert_comment = "INSERT INTO comments (comment,username,email,post_id) 
VALUES('$comment','$name_comment','$email_comment','$id')";
 
 $connect->query($insert_comment);

//  header('location:../../blog.php');
