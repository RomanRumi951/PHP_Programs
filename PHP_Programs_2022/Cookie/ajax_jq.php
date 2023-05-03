<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#s1").click(function(){
		
		var jid = $('#uid').val();
		var juser = $('#uname').val();
		var jpass = $('#pass').val();
		var jemail = $('#email').val();
		
		$.post('send.php',{id:jid,user:juser,pass:jpass,email:jemail},function(data){
			
			$('#result').html(data);
			
		});
		
	});
});

</script>
</head>



<body>

			
			<h1>new user enter here</h1>
						
			<input type="text" name="jid" id="uid" placeholder="Enter id"><br><br>
			<input type="text" name="name" id="uname" placeholder="Enter username"><br><br>
			<input type="password" name="pass" id="pass" placeholder="Enter Pass"><br><br>
			<input type="text" name="email" id="email" placeholder="Enter Email"><br><br>
			<input type="submit" id = "s1">
			
			<div id="result"></div>
	
		</div>

</body>
</html>
