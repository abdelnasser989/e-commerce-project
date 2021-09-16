<?php

require_once 'connect.php';

if(!isset($_POST['x_search'])){

    echo 'wrong';
}else {
    
  $search = $_POST['x_search'];

  $select_search = "SELECT * FROM products WHERE sellar LIKE'%$search%'";
  $result_search = $connect ->query($select_search);
   $counter = $result_search ->num_rows;

   if($counter > 0){
       foreach($result_search  as $row_search){

        echo "<li class='nav-item'>".$row_search['sellar']."</li>";

       }


   }else {
       echo 'result not found!!!!!!';
   }

}
