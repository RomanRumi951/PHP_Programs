<center>
	<form method="post">
		<input type="text" name="so_no" placeholder="Enter serial no."><br><br>
		<input type="text" name="name" placeholder="Enter name."><br><br>
		<input type="text" name="roll_no" placeholder="Enter roll no."><br><br>
		<input type="text" name="grade" placeholder="Enter grade."><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
	$conn = @mysqli_connect("localhost","root","","rr_database1");
	/*or die("Something really went wrong!!! R.I.P")*/
	if (!$conn)
		echo "Connection <input type=button style=border:none;background-color:red;border-radius:75%;width:10px;height:10px;>";
	else
		echo "Connection <input type=button style=border:none;background-color:green;border-radius:75%;width:10px;height:10px;>";
	if(isset($_POST['submit']))
	{
		$so_no = $_POST['so_no'];
		$name = $_POST['name'];
		$roll_no = $_POST['roll_no'];
		$grade = $_POST['grade'];
		
		$ins = "INSERT INTO `student_data1` values('$so_no','$name','$roll_no','$grade')";
		$result = @mysqli_query($conn, $ins);
	}
	?>
	<br><a href="display.php">Wanna see the records!!!??click here!!</a>
</center>