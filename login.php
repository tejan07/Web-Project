<?php 
		
		$mysqli = new mysqli('localhost','root','','gaana');

		if($mysqli->connect_errno > 0){
    		echo "Database connection failed";
		}
$em=$_POST['uname'];
$pw=$_POST['passwword'];


$sql="SELECT * FROM signup WHERE na='$em' and pa='$pw'";
$result=$mysqli->query($sql);

$count=mysqli_num_rows($result);


if($count>=1){
 if(!empty($_POST["remember"])) {
	setcookie ("uname",$_POST["uname"],time()+ 360000);
	setcookie ("passwword",$_POST["passwword"],time()+ 360000);
	echo "Cookies Set Successfuly";
}
    header('Location:ls.html');
}
else {
	echo "<h2>Login Failed!!!</h2>";
}
?>