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
			<input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="    	                           Input any text"><br><br>
			<h2 style="color: green;"><input type="checkbox" name="c1" value="bold" style="height: 1.5rem;width:1.5rem;">Bold
			<input type="checkbox" name="c2" value="italic" style="height: 1.5rem;width:1.5rem;">Italic
			<input type="checkbox" name="c3" value="overline" style="height: 1.5rem;width:1.5rem;">Overline
			<input type="checkbox" name="c4" value="underline" style="height: 1.5rem;width:1.5rem;">Underline
			<input type="checkbox" name="c5" value="line-through" style="height: 1.5rem;width:1.5rem;">Line-through<br><br>
			<!-- <input type="text" name="t2" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                             Input text-decoration"><br><br> -->
			<!-- <input type="text" name="t3" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="                                 Input number 3"><br><br> -->
			<input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:2rem;font-family:cursive;color:green;><br><br>
		</form>

		<?php

		@$a = $_POST['t1'];
		@$b = $_POST['c1'];
		@$c = $_POST['c2'];
		@$d = $_POST['c3'];
		@$e = $_POST['c4'];
		@$f = $_POST['c5'];


		// if ($e === 'underline') {

		// 	echo "<p style=text-decoration:underline;font-size:2rem;color:green;>$a";
		// } else if ($b === 'bold') {

		// 	echo "<p style=font-weight:bold;font-size:2rem;color:green;>$a";
		// } else if ($d === 'overline') {

		// 	echo "<p style=text-decoration:overline;font-size:2rem;color:green;>$a";
		// } else if ($f === 'st') {

		// 	echo "<p style=text-decoration:line-through;font-size:2rem;color:green;>$a";
		// } else if ($c === 'italic') {

		// 	echo "<p style=font-style:italic;font-size:2rem;color:green;>$a";
		// }

		switch ($b or $c or $d or $e or $f)
		{
			case 'variable':
				// code...
				break;
		}
		
		?>

</body>

</html>