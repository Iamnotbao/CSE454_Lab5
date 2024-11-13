<?php
if(isset($_GET['id'])){
	$servername="localhost";
	$username="root";
	$password="";
	$port=3306;
	$db="lab";

	$conn = mysqli_connect($servername,$username,$password,$db);

	if(!$conn){
		die("Connection failed!!!");
	}
	$id = $_GET["id"];
	mysqli_set_charset($conn,"utf8");
	$sql = "DELETE FROM `product` WHERE _id=$id";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header("refresh:3;url=http://localhost/CSE454/Lab5_ProductList.php");
	die();
}
  ?>
}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Balo
</body>
</html>