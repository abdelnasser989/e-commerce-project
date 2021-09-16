<?php

require_once 'connect.php';

$id = $_GET['id'];

$delete_message = "DELETE FROM message WHERE id = '$id'";

$connect ->query($delete_message);
header('location:../messages.php');