<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	
	<link rel="stylesheet" href = "style.css" >
	
</head>
<body style="background-color:pink">
<center>

	<div class="header">
		<h2> Register Now </h2>
		<img src="img/ck.png" class="ck"/>
		</div>    
    
	<form method="post" action="register.php">
		
         <?php include('errors.php'); ?>
        
		<div class="input-group">
			<label> <b> UserName : </b> </label><br>
			<input name="username" type="text" placeholder="Type Your Name"> 
		</div>
		
		<div class="input-group">
			<label> <b> Email : </b> </label><br>
			<input name="email" type="email" placeholder="Type Your Email"> 
		</div>
		
		<div class="input-group">
			<label> <b> Password : </b> </label><br>
			<input name="password_1" type="password" placeholder="Type Your Password">
		</div>
		
		<div class="input-group">
			<label> <b> Confirm Password : </b> </label><br>
			<input name="password_2" type="password" placeholder="Confirm Your Password"> 
		</div>
		
		<div class="input-group">
			<button type="submit" name="registerbtn" class="btn"> Register </button>
		</div>
		<p>
		Alredy a member? <a href="login.php"> Sign In </a>
		</p>
        
        
	
	</form>
	</center>

</body> 
</html>