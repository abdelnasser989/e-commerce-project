<?php

require_once 'connect.php';

if(!isset($_POST['submit'])){


    header('location:index.php');
    exit();
}else{
    

    $title = $_POST['title'];
    $author =$_POST['author'];
    $post = $_POST['post'];
    $full_post = $_POST['full_post'];


    // $img_arr = array();
    $imgc = count($_FILES['image']['name']);
    for($i=0 ;$i<$imgc ;$i++){
        
        $image = $_FILES['image']['name'][$i];
    
    
        if($_FILES['image']['error'][$i] == 0){
    
            $extentions = array('jpg','png','gif','jpeg');
    
            $ext = pathinfo($image,PATHINFO_EXTENSION);
    
            if(in_array($ext,$extentions)){
    
                if($_FILES['image']['size'][$i] < 50000000){
    
                    $new_name = md5(uniqid()).".".$ext;
    
                    move_uploaded_file($_FILES['image']['tmp_name'][$i],"../img_blogs/".$new_name);
    
                    $img_arr[] = $new_name;
    
                    $img_imp = implode(",",$img_arr);
    
    
                }else{echo "image is too larg";}
            }else{echo "this ext not found";}
    
        }else{echo "Error 404";}
    
            
    }


    $insert_blogs ="INSERT INTO blog (title,author,post,full_post,img) 
    VALUES('$title','$author','$post','$full_post','$img_imp')";
    $connect ->query($insert_blogs);

    header('location:../Blogs.php');

}