	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost','root','','gaana');

		if($mysqli->connect_errno > 0){
    		echo "fdkjfd";
		}
		
		$query = "INSERT INTO signup (na,ea,pa) VALUES ('$Name','$EMail','$Password')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		 echo "iodjdso";
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
header("location:jhj.html");
	?>
