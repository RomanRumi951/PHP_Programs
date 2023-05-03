<?php
	if(isset($_COOKIE['visit']))
	{

			$name = "visit";
			$content = $_COOKIE['visit']+1;
			$exp = time()+3600;

			setcookie($name,$content,$exp);
	}
	else
	{
			$name = "visit";
			$content = 1;
			$exp = time()+3600;

			setcookie($name,$content,$exp);

	}

?>

<html>
<body>
		<h1>
				you are visitor number.<?php echo $_COOKIE['visit']; ?>
		</h1>
</body>
</html>