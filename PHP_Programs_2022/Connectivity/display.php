<html>
<head>
	<title></title>
</head>
<body>
	<center>
			<form method="post">
				<table border="1" align="center" cellpadding="10">
				<tr>
					<th>so_no</th>
					<th>name</th>
					<th>roll_no</th>
					<th>grade</th>
					<th>Action</th>
				</tr>
				<?php
						@$link = @mysqli_connect("localhost","root","","rr_database1") or die("something went wrong");
						@$sid = $_GET['dele'];
						@mysqli_query($link,"DELETE FROM `student_data1` WHERE so_no = '$sid'");
						@$disp = @mysqli_query($link,"SELECT * FROM `student_data1`");
						while ($value=@mysqli_fetch_array($disp)) 
						{
				?>
				<tr>
					<td><?php echo $value['so_no']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['roll_no']; ?></td>
					<td><?php echo $value['grade']; ?></td>
					<td><a href="update.php ?up=<?php echo $value['so_no']; ?>">EDIT</a>||<a href="display.php ?dele=<?php echo $value['so_no']; ?>">DELETE</a></td>
				</tr>
				<?php } ?>
				</table>
				<p align="center"><a href="connectivity.php">Wanna Insert new record!!!</a></p>
			</form>
	</center>
</body>
</html>