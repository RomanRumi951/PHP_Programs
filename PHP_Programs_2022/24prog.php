<html>
	<body>
	<center><h3 style= font-family:cursive;color:green>Enter a year to check whether it is a leap year or not :-</h3>
		<form method="POST"><br>
		<input type="text" name="t1" style=width:20rem;height:3rem;border-radius:1rem;border-color:transparent;background-color:#0003;><br><br>
		<input type="SUBMIT" name="s1" style=width:5rem;height:3rem;border-radius:1rem;font-size:1rem;font-weight:bold;border-color:transparent;><br>
		</form>

		<?php
		$a = $_POST['t1'];
		$b = 4;
		function leapfun($a, $b)
		{
			if (fmod($a,$b)==0)
			{
				echo "<h3 style= font-family:cursive;color:green> Entered year is a Leap year.";
			}
			else
			{
				echo "<h3 style= font-family:cursive;color:green>Entered year is not a Leap year.";
			}
		}
		leapfun($a, $b);
		?>
	
	</body>
</html>