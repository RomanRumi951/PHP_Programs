<html>
	<body>
	<center><h3 style= font-family:cursive;color:green>Enter a number to check whether it is armstrong or not :-</h3>
		<form method="POST"><br>
			<input type="text" name="t1"><br><br>
			<input type="SUBMIT" name="s1"><br>
		</form>
		<?php
		$a = $_POST['t1'];
		$b = $a;
		$length = strlen($a);
		$sum = 0;

		while ($b > 0) 
		{
			$digit = $b%10;
			$sum = $sum + pow($digit, $length);
			$b = $b/10;
		}

		if ($sum == $a)
			{
				echo "<h3 style= font-family:cursive;color:green>Inputted number is an armstrong number ::: ";
			}
			else
			{
				echo "<h3 style= font-family:cursive;color:green>Inputted number is not an armstrong number ::: ";	
			}

		?>
	
	</body>
</html>