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
	$sqlSelection = "SELECT * FROM `product` WHERE _id=$id";
	$newSelection = mysqli_query($conn,$sqlSelection);

	echo $id;
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_POST['product_code'])){
		$product_code = $_REQUEST['product_code'];
		$product_name = $_REQUEST['product_name'];
		$brand = $_REQUEST['brand'];
		$quantity = $_REQUEST['quantity'];
		$importing_date = $_REQUEST['importing_date'];
		$image_url = $_REQUEST['image_url'];
		$sql = "UPDATE `product` SET `product_code`='$product_code',`product_name`='$product_name',`brand`='$brand',`quantity`='$quantity',`importing_date`='$importing_date ',`image_url`='$image_url' WHERE _id=$id";
		mysqli_query($conn,$sql);
		mysqli_close($conn);
		header("refresh:3;url=http://localhost/CSE454/Lab5_ProductList.php");
}
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
		<form action="" method="POST">
			<?php 
			if(mysqli_num_rows($newSelection) > 0){
				while($row = mysqli_fetch_assoc($newSelection)){
				?>
			<label for="product_code">Product code</label>
			<br>
			<input type="text" id="product_code" name="product_code" value=<?php echo $row['_id'] ?> required>
			<br>
			<label for="product_name">Product name</label>
			<br>
			<input type="text" id="product_name" name="product_name" value=<?php echo $row['product_name']?>required>
			<br>
			<label for="brand">Brand</label>
			<br>
			<input type="text" id="brand" name="brand" value=<?php echo $row['brand']?> required>
			<br>
			<label for="quantity">Quantity</label>
			<br>
			<input type="text" id="quantity" name="quantity" value=<?php echo $row['quantity']?> required>
			<br>
			<label for="importing_date">Create Date</label>
			<br>
			<input type="text" id="importing_date" name="importing_date"value=<?php echo $row['importing_date']?> required>
			<br>
			<label for="image_url">Image Url:</label>
			<br>
			<input type="text" id="image_url" name="image_url" value=<?php echo $row['image_url'] ?>required>
			<br>
			<button type="submit">Update</button>
			<?php 

			}
			}
			 ?>
		</form>
	</body>
</html>