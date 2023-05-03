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


	
		
		<?php

		@$a = $_POST['t1'];
		@$i = 0;
		@$j = 0;
	
	
	
			echo "<h3 style= font-family:cursive;color:green> Factors of Given Number ::: ";

			for ($j=1; $j<=$a ; $j++)
			{
				if ($a % $j == 0) {
					echo "<h3 style= font-family:cursive;color:green> $j ";
				}
				
			}

	
		


		?>

	</table>

</body>
</html>