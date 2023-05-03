<html>
	<body>
	<center><h3 style= font-family:cursive;color:green>Enter P, R and N to calculate simple interest :-</h3>
		<form method="post"><br>
			<input type="text" placeholder="	Enter Principle amount" size="28" name="t1"><br><br>
			<input type="text" placeholder="	Enter rate of interest" size="28" name="t2"><br><br>
			<input type="text" placeholder="	Enter Number of years" size="28" name="t3"><br><br>
			<input type="SUBMIT" name="s1"><br>
		</form>
		<?php
		@$p = $_POST['t1'];
			@$r = $_POST['t2'];
			@$n = $_POST['t3'];
		@$i=0;
		function delete($p,$r,$n)
		{
			
			$i = ($p*$r*$n)/100;
			
			return $i;
		}
		$a=delete($p,$r,$n);
		echo "<h3 style= font-family:cursive;color:green>The Simple Interest for entered amount is : $a";
		?>
	</h2></center>
	</body>
</html>