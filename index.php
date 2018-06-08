<?php include('server.php'); 

//user is not login,they can not access the page
//if(empty($_SESSION['username'])) {
//	header('location:login.php');
//}

$sql1="select * from users";
$result=mysqli_query($db, $sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registation System </title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body style="background-color:pink">
<center>

	<div class="header">
		<h2> Home Page </h2>
		<img src="img/ck.png" class="ck"/>
		</div>
		
		<div class= "content">
			<?php if (isset($_SESSION['success'])); ?>
				<div class="error success">   
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				
				</div>
				
			
			<?php if (isset($_SESSION["username"]));  ?>
				<p> WELCOME <strong><?php echo $_SESSION['username']; ?> </strong> </p>
            
            
    
            
				<p> <a href="index.php?logout='1'" style="color:red;"> Logout </a> </p>
			
		</div>
		
	</center>

</body> 
</html>