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
		<h2> Login </h2>
		<img src="img/ck.png" class="ck"/>
		</div>
		

		
	<form method="post" action="login.php">
	
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
			<button type="submit" name="loginbtn" class="btn"> <b> Login </b> </button>
		</div>
	
        	<p>
		Newly User? <a href="register.php"> Register </a>
		</p>
		
			<p>
		Admin Login <a href="adminlogin.php"> here </a>
		</p>
	
	
	</form>
	</center>

</body> 
</html>