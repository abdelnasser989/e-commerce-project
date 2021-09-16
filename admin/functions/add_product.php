<?php
    require_once 'connect_product.php';

if(!isset($_POST['submit'])){


    header('location:../login.php');


    exit();
}


$sellar = $_POST['sellar'];
$client = $_POST['client'];
$price = $_POST['price'];
$description = $_POST['description'];
$img_arr = array();
$imgc = count($_FILES['image']['name']);
for($i=0 ;$i<$imgc ;$i++){
    
    $image = $_FILES['image']['name'][$i];


    if($_FILES['image']['error'][$i] == 0){

        $extentions = array('jpg','png','gif','jpeg');

        $ext = pathinfo($image,PATHINFO_EXTENSION);

        if(in_array($ext,$extentions)){

            if($_FILES['image']['size'][$i] < 50000000){

                $new_name = md5(uniqid()).".".$ext;

                move_uploaded_file($_FILES['image']['tmp_name'][$i],"../img/".$new_name);

                $img_arr[] = $new_name;

                $img_imp = implode(",",$img_arr);


            }else{echo "image is too larg";}
        }else{echo "this ext not found";}

    }else{echo "Error 404";}

        
}



$insert_product = " INSERT INTO products  (sellar,client,price,img,description)     
VALUES ('$sellar','$client','$price','$img_imp','$description')";



$result_product =  $connect->query($insert_product);

 header('location:../product.php');

?>

<!--   امبلود تحويل الاريي الي نص 
  عشان تتخزن في الداتا بيز 

 اكسبلودو العكس عشان تظهر في الصفحه بتاعت الاندككس-->








 
 
