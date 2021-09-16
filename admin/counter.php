<?php

	
             
	 require "functions/connect.php";
     require 'visitor_counter_cookie.php';
     
	$quer = mysqli_query($connect,"SELECT count from hit_counter");
	echo "Visitor Count: " . $quer->fetch_array(MYSQLI_NUM)[0];
	
	mysqli_close($connect);