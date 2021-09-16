<?php

require_once 'connect.php';

if(!isset($_POST['submit'])){


    header('location:../blogs.php');
    exit();
}else{
    

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $post = $_POST['post'];
    $full_post = $_POST['full_post'];
    $image = $_POST['image'];




    $update_blogs = "UPDATE blog SET title = '$title' , author = '$author' , post= '$post', full_post='$full_post' WHERE id='$id'";

    $connect ->query($update_blogs);
    header('location:../blogs.php');





}