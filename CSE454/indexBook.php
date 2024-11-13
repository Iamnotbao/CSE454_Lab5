<?php
$servername ="localhost";
$username ="root";
$password ="";
$db ="book";
$port =3306;
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	echo "error";
}
$sql = "SELECT * FROM `book` WHERE 1";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Quantity</th>
				<th>Book Status</th>
			</tr>
			<?php
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["title"];?></td>
				<td><?php echo $row["author"];?></td>
				<td><?php echo $row["quantity"];?></td>
				<td><?php echo $row["status"];?></td>
			</tr>
			<?php
			}
			}
			$conn = null
			?>
			
		</table>
	</body>
</html>