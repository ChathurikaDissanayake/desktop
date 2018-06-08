
<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "register";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	
	<link rel="stylesheet" href = "register/style.css" >
	
</head>
<body style="background-color:pink">
<center>

	<div class="hesder">
		<h2> Register Now </h2>
		<img src="img/ck.png" class="ck"/>
		</div>
		

		
	<form method="post" action="register.php">
	
			<!-- display  validation error here -->
			
			
			
		<div class="input-group">
			<label> <b> User Name : </b> </label> <br>
			<input type ="text" class="inputvalues" placeholder="Type Your Name"    /> <br>
		</div>
		
		<div class="input-group">
			<label> <b> Email : </b> </label> <br>
			<input type ="text" class="inputvalues" placeholder="Type Your Email"   /> <br>
		</div>
		
		<div class="input-group">
			<label> <b> Password : </b> </label> <br>
			<input name="password" type ="password" class="inputvalues" placeholder="Type Your Password"> <br>
		</div>
		
		<div class="input-group">
			<label> <b> Confirm Password : </b> </label> <br>
			<input name="password" type ="password" class="inputvalues" placeholder="Confirm Your Password "> <br>
		</div>
		
		<div class="input-group">
			<button type ="submit" name="register" class="btn"> Register </button>
		</div>
		<p>
		Alredy a member? <a href="login.php"> Sign In </a>
		</p>
	
	</form>
	</center>

</body> 
</html>