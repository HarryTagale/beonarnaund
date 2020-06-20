<?php
$con =mysqli_connect('localhost','root');
if ($con){
	echo "Conection successful";
}

	else{
		echo "no connection";
	}

mysqli_select_db($con,'userinfodata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];
$query = "INSERT INTO userinfo( user, email, mobile, comments) 
VALUES ($user,$email,$mobile,$comments)";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');

?>
