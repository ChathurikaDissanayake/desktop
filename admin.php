<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	
	<link rel="stylesheet" href = "style.css" >
	
</head>
<body style="background-color:pink">
<center>

	<div class="container">
		<h2> Admin View </h2>
		<img src="img/ck.png" class="ck"/>
		</div>    
    
	<form method="post" action="register.php">
		
         <?php include('errors.php'); ?>
        
			<?php
			$sql="SELECT *FROM users INNER JOIN profile ON users.id=profile.admin_role";
			$result=mysqli_query($conn,$sql) or die ("error");
			if(mysqli_num_rows($result)>0) {
				while($admin=mysqli_fetch_assoc($result)){
					$username=$users['username'];
					$email=$users['email'];
					?>
					
				<div class ="row">
					<div class ="col-lg-4">
					<h1><?php echo $username; ?> </h1>
					<h1><?php echo $email; ?> </h1>
				</div>
				<hr>
				<?php
				
				}
			}
		?>
		
	
	</form>
	</center>

</body> 
</html>