<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<center>
		<br><br><br><br>

		<table cellpadding="35" cellspacing="0" style="border: solid;">

			<?php

			$i = 1;
			$j = 1;

			for ($i = 1; $i <= 8; $i++) {
				echo "<tr>";

				if ($i % 2 == 0) {
					for ($j = 1; $j <= 8; $j++) {

						if ($j % 2 == 0) {
							echo "<td style=border:none;background-color:white;></td>";
						} else {
							echo "<td style=border:none;background-color:black;></td>";
						}
					}
				} else {
					for ($j = 1; $j <= 8; $j++) {

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