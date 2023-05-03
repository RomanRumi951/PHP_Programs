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
			<input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:20rem; placeholder="    	                        Enter any string ::"><br><br>
			
			<input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:1.5rem;font-family:cursive;color:green;><br><br>
		</form>

		<?php

		@$a = $_POST['t1'];

		if ($a == strtolower($a)) {

            $b = strtoupper($a);
            echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>$b</h3>";
        }
        else if($a == strtoupper($a))
        {
            $b = strtolower($a);
            echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>$b</h3>";
        }
		?>

</body>
</html>