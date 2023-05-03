<?php

					@$link = @mysqli_connect("localhost","root","","rr_database1") or die("something went wrong");

					@$sid = $_GET['up'];

					$disp = @mysqli_query($link,"SELECT * FROM `student_data1` WHERE so_no = '$sid'");
					$value=@mysqli_fetch_array($disp);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>
		<form method="POST">

			
			<input type="text" name="so_no" value="<?php echo $value['so_no']; ?>" ><br><br>
			<input type="text" name="name" value="<?php echo $value['name']; ?>" ><br><br>
			<input type="text" name="roll_no" value="<?php echo $value['roll_no']; ?>"><br><br>
			<input type="text" name="grade" value="<?php echo $value['grade']; ?>"><br><br>
			<input type="submit" name="s1" value="submit">
		</form>

		<?php

			if(isset($_POST['s1']))
			{
				@$so_no = $_POST['so_no'];
				@$name = $_POST['name'];
				@$roll_no = $_POST['roll_no'];
				@$grade = $_POST['grade'];

				


				
					if(@mysqli_query(@$link, "UPDATE `student_data1` SET `so_no`='$so_no',`name`='$name',`roll_no`='$roll_no',`grade`='$grade' WHERE so_no = '$sid'"))	
		{
				header("refresh:0;display.php");

		}
				
			}

		?>
		
	</center>

</body>
</html>