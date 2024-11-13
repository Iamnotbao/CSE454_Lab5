<?php
	$servername="localhost";
	$username="root";
	$password="";
	$port=3306;
	$db="lab";
	$conn = mysqli_connect($servername, $username, $password, $db);
	if(!$conn){
		die("Connection failed!!!");
	}
	mysqli_set_charset($conn,"utf8");
	$sql = "SELECT * FROM `product` WHERE 1";
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
		<table border="1" cellpadding="10px">
			<thead>
				<tr>
					<th>ID</th>
					<th>product code</th>
					<th>product name</th>
					<th>brand</th>
					<th>quantity</th>
					<th>date</th>
					<th colspan="3">image_url</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td><?php echo $row['_id']?></td>
					<td><?php echo $row['product_code']?></td>
					<td><?php echo $row['product_name']?></td>
					<td><?php echo $row['brand']?></td>
					<td><?php echo $row['quantity']?></td>
					<td><?php echo $row['importing_date']?></td>
					<td><?php echo $row['image_url']?></td>
					<td><button class="edit" data-id="<?php echo $row['_id']; ?>" >edit</button>
						<td><button class="btn btn-outline-danger" data-id="<?php echo $row['_id']; ?>" >x</button></td>
					</tr>
					<?php
						}
					}
					mysqli_close($conn);
					?>
					<tr>
						<td colspan="7">
							<button class="add">Add</button>
						</td>
					</tr>
				</tbody>
			</table>
			<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$("tbody").on("click",".btn-outline-danger",function(){
					if(confirm("Are you sure?")){
						let id = $(this).attr("data-id");
						console.log(id);
						location.href = "http://localhost/CSE454/function.php?id="+id;
					}
				})
				$("tbody").on("click",".edit",function(){
					if(confirm("Update?")){
						let id = $(this).attr("data-id");
						console.log(id);
						location.href = "http://localhost/CSE454/Lab5_Product_Edit.php?id="+id;
					}
				})
				$("tbody").on("click",".add",function(){
					location.href="http://localhost/CSE454/Lab5_Add.php";
				})
			</script>
			
		</body>
	</html>