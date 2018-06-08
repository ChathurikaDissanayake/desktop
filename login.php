

<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	<link rel="stylesheet" href = "login/style.css">
	
</head>
<body style="background-color:pink">
<center>

	<div class="hesder">
		<h2> Login </h2>
		<img src="img/ck.png" class="ck"/>
		</div>
		

		
	<form method="post" action="login.php">
	
	<!-- display  validation error here -->
			
			
			
		<div class="input-group">
			<label> <b> User Name : </b> </label> <br>
			<input type ="text" class="inputvalues" placeholder="Type Your Name"/> <br>
		</div>
		
		<div class="input-group">
			<label> <b> Password : </b> </label> <br>
			<input name="password" type ="password" class="inputvalues" placeholder="Type Your Password"> <br>
		</div>
		
		<div class="input-group">
			<button type ="submit" name="login" class="btn"> <b> Login </b> </button>
		</div>
	
		<div class="input-group">
			<button type ="submit" name="register" class="btn" >  <b>  Register</b> </button>
		</div>
	
	</form>
	</center>

</body> 
</html>