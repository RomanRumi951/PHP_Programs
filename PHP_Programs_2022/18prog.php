<!DOCTYPE html>
<html>
<head>
		

</head>
<body>

	<center>

	<form method="post">

		<input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003; placeholder="                                Enter a number"><br><br>
		<input type="submit" name="s1" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br><br>
		

	</form>


	<table style="border: solid;border-radius: 1rem;" cellpadding="15" cellspacing="10">
		
		<?php

		@$a = $_POST['t1'];
		@$i = 0;
		@$j = 0;
	
		for ($i=1; $i<=10; $i++) { 
			echo "<tr>";

			for ($j=1; $j<=1 ; $j++)
			{
				@$z=$a*$i;
				echo "<td style=border-radius:1rem;border-color:transparent;background-color:#0003;font-size:1.5rem;>$a x $i </td><td style=border-radius:1rem;border-color:transparent;background-color:#0003;font-size:1.5rem;> $z 
				</td>";
			}

			echo "</tr>";
		}


		?>

	</table>

</body>
</html>