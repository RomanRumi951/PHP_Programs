<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<center>
		<br>
		<form action="" method="POST">
			<input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="    	                         Input a number"><br><br>
			<input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:2rem;font-family:cursive;color:green;><br><br>
		</form>

		<table cellpadding="35" cellspacing="0" style="border: solid;">

			<?php
			$a = $_POST['t1'];
			$i = 1;
			$j = 1;

			for ($i = 1; $i <= $a; $i++) {
				echo "<tr>";

				if ($i % 2 == 0) {
					for ($j = 1; $j <= $a; $j++) {

						if ($j % 2 == 0) {
							echo "<td style=border:none;background-color:white;></td>";
						} else {
							echo "<td style=border:none;background-color:black;></td>";
						}
					}
				} else {
					for ($j = 1; $j <= $a; $j++) {

						if ($j % 2 == 0) {
							echo "<td style=border:none;background-color:black;></td>";
						} else {
							echo "<td style=border:none;background-color:white;></td>";
						}
					}
				}

				echo "</tr>";
			}

			?>


		</table>


	</center>
</body>

</html>