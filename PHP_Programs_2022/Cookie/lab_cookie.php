<?php

	$exp = time()+10;
	
	setcookie("jnam","rohit",$exp);
	
	if(isset($_COOKIE['jnam']))
	{
		echo "<h1 align=center>my name is ".$_COOKIE['jnam'];
	}
	else
	{
		echo "<h1 align=center>please refresh page to see value";
	}
?>   