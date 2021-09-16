<?php		
	$cookie_name = "visCounter";
	if(!isset($_COOKIE[$cookie_name])) {	
		require("functions/connect.php");
		$sql_Query = "UPDATE hit_counter SET count=count+1";
		if ($connect->query($sql_Query) === FALSE) 
			echo "Error updating record: " . $connect->error;
		else{
			setcookie($cookie_name, "is counted", 
			time() + (60), "/"); // expires in 10 years
			
		}
		mysqli_close($connect);
	}		