<?php

	$jid = $_POST['id'];
	$juser = $_POST['user'];
	$jpass = $_POST['pass'];
	$jemail = $_POST['email'];
	
	@mysql_connect('localhost','root','');

	mysql_select_db("stud_record") or die('no database found');

	mysql_query("insert into user(id,user,pass,email) values('$jid','$juser','$jpass','$jemail')");
	
	echo "record inserted successfully";
?>
