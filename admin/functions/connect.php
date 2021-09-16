<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name= 'training';

$connect = new mysqli($server_name,$user_name,$password,$db_name);

$connect -> set_charset('utf8');

// if(isset($connect)){

//     echo 'conencted';
// }else {
//   echo 'not conncted';
// }