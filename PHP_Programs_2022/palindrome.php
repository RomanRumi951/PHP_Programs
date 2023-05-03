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
			<input type="text" name="t1" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:22rem; placeholder="    Enter any string to check whether it's palindrome or not::"><br><br>
			
			<input type="submit" value="submit" style=border-radius:1rem;border-color:transparent;background-color:#0002;height:3rem;width:10rem;font-size:1.5rem;font-family:cursive;color:green;><br><br>
		</form>

		<?php

        @$a = $_POST['t1'];
        
        @$b = $a;

		if (strrev($a) === $b) {
      
            echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>Inputted string is palindrome....&#10003</h3>";
        }
        else 
        {
            
            echo "<h3 style=font-size:2rem;font-family:cursive;color:green;>Inputted string is not palindrome....&#9785</h3>";
        }
		?>

</body>
</html>