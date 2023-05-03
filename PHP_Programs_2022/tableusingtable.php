<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<center>

		<table cellpadding="35" cellspacing="0">

			<?php

			$i = 1;
			$j = 1;

			for ($i = 1; $i <= 10; $i++) {
				echo "<tr>";
				for ($j = 1; $j <= 10; $j++) {
					$c = $i * $j;
					echo "<td style=border:ridge;border-radius:1rem;color:white;background-color:red;>$c</td>";
				}
				echo "</tr>";
			}

			?>

		</table>


	</center>
</body>

</html>