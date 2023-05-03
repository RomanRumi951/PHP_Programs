<html>
<body>
<center><h2>
	<?php
	$ar1 = array("H", "e", "l", "l", "o");
	$ar2 = array("w", "o", "r", "l", "d");
	echo "First array :<br><br>";
	print_r($ar1);
	echo "<br><br>Second array :<br><br>";
	print_r($ar2);
	echo "<br><br>Array merged :<br><br>";
	print_r (array_merge($ar1,$ar2));

	echo "<br><br>Array converted to stirng :<br><br>";
	echo implode($ar1), " ", implode($ar2);
	?>
</h2></center>
</body>
</html>