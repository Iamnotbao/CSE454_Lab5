<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lol</title>
	</head>
	<body>
		<?php echo "Hi<br>"; ?>
		<?php $a = 1;
			$b = 2;
			echo $a;
			echo "hello"."$a";
			echo"<br>Hi $a";
		?>
		<?php
		$age = array("Peter" => "35","Bao" => "34" );
		foreach ($age as $x => $val) {
			echo "$x = $val<br>";
		}
		$age = array("Peter","Bao");
		foreach ($age as $val) {
			echo "$val<br>";
		}
		var_dump($age);
		echo"<br>";
		print($age[0]);
		echo"<br>";
		print_r($age);
		
		?>
	</body>
	<div></div>
</html>