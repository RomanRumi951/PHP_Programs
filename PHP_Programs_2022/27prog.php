<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
	<?php

		$color =array("Purple","Green","Yellow","Red", "Navyblue");
		
		
		echo "<h2 style= font-family:cursive;color:green> Array movements are shown as below::";
		echo "<h3 style= font-family:cursive;color:green>";
		echo "<br><br>";
		print_r($color);
		echo "<br><br>";
		echo "1. current( ) = ",current($color) ,"<br>", "<br>";
		echo "2. end( ) = ", end($color), "<br>", "<br>";
		echo "3. reset( ) = ", reset($color), "<br>", "<br>"; 
		echo "4. next( ) = ", next($color), "<br>", "<br>"; 
		echo "5. prev( ) = ", prev($color), "<br>", "<br>"; 

		// Sort(), rsort(), assort(), arsort()

		echo "<hr>";
		$color =array("Purple","Green","Yellow","Red", "Navyblue");
		echo "<h2 style= font-family:cursive;color:green> Array sorting are shown as below::";
		echo "<h3 style= font-family:cursive;color:green>";
		echo "<br><br>";
		print_r($color);
		echo "<br><br>";
		echo "1. sort( ) = ","<br>", "<br>";
		$z = sort($color);
		print_r($color);
		echo "<br>";
		echo "2. rsort( ) = ", "<br>", "<br>";
		$z = rsort($color);
		print_r($color);
		echo "<br>";
		echo "3. asort( ) = ", "<br>", "<br>"; 
		$z = asort($color);
		print_r($color);
		echo "<br>";
		echo "4. arsort( ) = ", "<br>", "<br>";
		$z = arsort($color);
		print_r($color);
		echo "<br>";



	?>

</body>
</html>