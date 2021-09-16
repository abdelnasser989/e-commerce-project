<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
define('DBNAME','training');

$connect = new mysqli($server_name,$user_name,$password,DBNAME);

$connect -> set_charset('utf8');

if(isset($connect)){

    echo 'conencted';
}else {
  echo 'not conncted';
}