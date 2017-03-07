<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In Process</title>
</head>
<body>
	<?php 
		$uname = $_POST['uname'];
		$upassword = $_POST['upassword'];

		$host = "localhost";
		$userdb = "root";
		$password = "";
		$dbname = "comscia_db";
		$conn = mysqli_connect($host,$userdb,$password,$dbname);

		$strsql = "select * from user_tb where uname='".$uname."' and supassword='".$upassword."'";

		$result = mysqli_query($conn, $strsql);

		mysqli_fetch_array($result);

		if($row = mysqli_fetch_array($result)){
			echo "OK";			
		}else{
			echo "User name และ Password ไม่ถูกต้อง";
		}

	?>
</body>
</html>