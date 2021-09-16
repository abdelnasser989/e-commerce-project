<?php


 require_once 'connect.php';

$reply = $_POST['z_reply'];
$id_reply = $_POST['z_id'];



$insert_reply ="INSERT INTO reply (post_reply_id,reply)VALUES('$id_reply','$reply')";

$connect->query($insert_reply);

header('location:../index.php');
