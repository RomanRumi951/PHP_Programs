<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<center>
		<form method="post">
			<input type="text" name="so_no"><br><br>
			<input type="text" name="name"><br><br>
			<input type="text" name="roll_no"><br><br>
			<input type="text" name="grade"><br><br>
			<input type="submit" value="submit"><br><br>
		</form>
		<?php

		@$so_no = $_POST['so_no'];
		@$name = $_POST['name'];
		@$roll_no = $_POST['roll_no'];
		@$grade = $_POST['grade'];

		$conn = @mysqli_connect("localhost","root","","rr_database1") or die("Something really went wrong!!!");

		$ins = "insert into rr_studdata values('$so_no','$name','$roll_no','$grade')";

		$res = mysqli_query($conn,$ins);

		if($res)
		{
			echo "connected";
		}

		?>
	</center>

</body>
</html>