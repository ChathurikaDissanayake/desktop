<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	<link rel="stylesheet" href = "style.css">
	
</head>
<body style="background-color:pink">
<center>

	<div class="hesder">
		<h2> Admin Login </h2>
		<img src="img/ck.png" class="ck"/>
		</div>
		

		
	<form method="post" action="adminlogin.php">
	
	 <?php include('errors.php'); ?>
				
		<div class="input-group">
			<label> <b> UserName : </b> </label> <br>
			<input name="username"  type="text" class="inputvalues" placeholder="Type Your Name"/> <br>
		</div>
		
		<div class="input-group">
			<label> <b> Password : </b> </label> <br>
			<input name="password" type="password" class="inputvalues" placeholder="Type Your Password"> <br>
		</div>
		
		<div class="input-group">
			<button type="submit" name="loginbtn" class="btn"> <a href="admin.php"> <b> Login </b> </a> </button>
		</div>
		
       
	
	
	</form>
	</center>

</body> 
</html>