<?php
$servername ="localhost";
$username ="root";
$password ="";
$db ="lab";
$port =3306;
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("Connect failed!!!");
	echo "error";
}
if($_SERVER['REQUEST_METHOD'] == "GET"){
	if(isset($_GET['product_code'])){
		$product_code = $_REQUEST['product_code'];
		$product_name = $_REQUEST['product_name'];
		$brand = $_REQUEST['brand'];
		$quantity = $_REQUEST['quantity'];
		$importing_date = $_REQUEST['importing_date'];
		$image_url = $_REQUEST['image_url'];
		mysqli_set_charset($conn,"utf8");
$sql = "INSERT INTO `product`( `product_code`, `product_name`, `brand`, `quantity`, `importing_date`, `image_url`) VALUES ('$product_code','$product_name','$brand','$quantity','$importing_date','$image_url')";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
header("refresh:3;url=http://localhost/CSE454/Lab5_ProductList.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1 style="text-align: center;">Add Product</h1>
		<form action="">
			<label for="product_code">Product code</label>
			<br>
			<input type="text" id="product_code" name="product_code" required>
			<br>
			<label for="product_name">Product name</label>
			<br>
			<input type="text" id="product_name" name="product_name" required>
			<br>
			<label for="brand">Brand</label>
			<br>
			<input type="text" id="brand" name="brand" required>
			<br>
			<label for="quantity">Quantity</label>
			<br>
			<input type="text" id="quantity" name="quantity" required>
			<br>
			<label for="importing_date">Create Date</label>
			<br>
			<input type="text" id="importing_date" name="importing_date" required>
			<br>
			<label for="image_url">Image Url:</label>
			<br>
			<input type="text" id="image_url" name="image_url" required>
			<br>
			<button type="submit">Add</button>
		</form>
	</body>
</html>