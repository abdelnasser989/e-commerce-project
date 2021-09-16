<?php

 require_once 'connect.php';

 $messege_view = $_POST['mass_view'];

 $update_massage = "UPDATE message SET status = 1 WHERE id ='$messege_view'";

 $result_view_massage = $connect -> query($update_massage);
 
//  if($connect -> query($update_massage)){

//  $select_mess = 'SELECT *FROM massage WHERE status=0';
//  $result_massage = $connect -> query($select_mess);

//  $counter = $result_massage ->num_rows;

//  echo $counter;



//  }