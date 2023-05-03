<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<center>
		<form action="" method="POST">
			<input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="    	       Input a color name(red, green, blue)"><br><br>
			<!-- <input type="text" name="t2" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 2"><br><br> -->
			<!-- <input type="text" name="t3" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 3"><br><br> -->
			<input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:2rem;font-family:cursive;color:green;><br><br>
		</form>

		<?php

		$a = $_POST['t1'];

		if ($a === 'green') {

			echo "<body style=background-color:green;>";
		} else if ($a === 'blue') {

			echo "<body style=background-color:blue;>";
		} else if ($a === 'red') {

			echo "<body style=background-color:red;>";
		} else {

			echo "<body style=background-color:white;>";
		}

		?>

</body>
</html>