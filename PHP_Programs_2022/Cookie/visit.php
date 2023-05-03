<?php

		$name="visit";
		$content = 1;
		$exp = time()+(6);
	
		setcookie($name,$content,$exp);

		
?>
<html>
<body>

	<h1> hello welcome visitor</h1>

	<?php
			echo "you are visitor number ".$_COOKIE['visit'];
	?>

	</body>
</html>
  
  