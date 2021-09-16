<?php

session_start();
require_once 'connect.php';


 $prod = $_POST['x_prod_rate_id'];
 $rate = $_POST['x_rate'];

$user_session = $_SESSION['login'];

$insert_rate ="INSERT INTO rate(user_id,product_id,count)
VALUES('$user_session','$prod','$rate')";

$connect->query($insert_rate);

$select_rate1 = "SELECT *FROM rate WHERE count = 1";
$result_rate1 = $connect->query($select_rate1);
$num_rate1 = $result_rate1->num_rows;

// $insert_rate_product = "INSERT INTO products WHERE rate = '$num_rate1'";
// $connect->query($insert_rate_product);

/////////////RATE TWO ///////

$select_rate2 =  "SELECT *FROM rate WHERE count = 2";
$result_rate2 = $connect->query($select_rate2);
$num_rate2 = $result_rate2->num_rows;


// $insert_rate_product = "INSERT INTO products WHERE rate = '$num_rate1'";
// $connect->query($insert_rate_product);


/////////////RATE THREE ///////

$select_rate3 =  "SELECT *FROM rate WHERE count = 3";
$result_rate3 = $connect->query($select_rate3);
$num_rate3 = $result_rate3->num_rows;



// $insert_rate_product = "INSERT INTO products WHERE rate = '$num_rate1'";
// $connect->query($insert_rate_product);



/////////////RATE FOUR ///////


$select_rate4 =  "SELECT *FROM rate WHERE count = 4";
$result_rate4 = $connect->query($select_rate4);
$num_rate4 = $result_rate4->num_rows;



// $insert_rate_product = "INSERT INTO products WHERE rate = '$num_rate1'";
// $connect->query($insert_rate_product);



/////////////RATE FIVE ///////


$select_rate5 =  "SELECT *FROM rate WHERE count = 5";
$result_rate5 = $connect->query($select_rate5);
$num_rate5 = $result_rate5->num_rows;


// $insert_rate_product = "INSERT INTO products (rate) VALUES('$num_rate5')";
// $connect->query($insert_rate_product);


//////////TOTAL RATES/////////

$total_rates = ($num_rate1 + $num_rate2 + $num_rate3 + $num_rate4 + $num_rate5);

// echo $total_rates;


//  $sum_rates = ($num_rate5+5)/($num_rate5); 
 
//   $final_sum = ($sum_rates / $total_rates);

 echo $total_rates;



