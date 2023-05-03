<?php
		$nam = "first";
		$cont = "<center><h1>cookie is set <br>welcome to DATA STRUCTURE</h1></center>";
		$exp = time()+(30);
	setcookie($nam,$cont,$exp);

	if(isset($_COOKIE['first']))
	{
		echo $_COOKIE['first'];
	}
	else
	{
		echo "<center><h1>cookie expire thay gai Refresh karo :)</h1></center>";
	}

?>