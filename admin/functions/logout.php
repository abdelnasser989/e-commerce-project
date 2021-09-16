<?php
session_start();
session_unset();
session_destroy();
$_SESSION['login']=$id;

header('location:../login.php');


?>