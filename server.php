<?php 

    session_start();

    $username="";
    $email="";
    $errors= array();
    
//database connection
$db = mysqli_connect('localhost','root','','registration');

//if register button is clicked
if (isset($_POST['registerbtn'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    
    //ensure that form fields are filled properly
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($email)){
        array_push($errors, "email is required");
    }
    if (empty($password_1)){
        array_push($errors, "password is required");
    }
    if ($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }
    
    //save to db
    if (count($errors)==0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (username,email,password)
        VALUES('$username','$email','$password')";
        mysqli_query($db, $sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="You are logged in";
        header('location: index.php');
    }
}
// login page

if (isset($_POST['loginbtn'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    //ensure that form fields are filled properly
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($password)){
        array_push($errors, "Password is required");
    }
    
    if (count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($db, $query);
        if (mysqli_num_rows($result)==1){
        
        $_SESSION['username']=$username;
        $_SESSION['success']="You are logged in";
        header('location: index.php');
            
        }else{
            array_push($errors, "Wrong Username Password combination");
        }

    }}
	
	
	
	
	// adminlogin page

if (isset($_POST['loginbtn'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    //ensure that form fields are filled properly
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($password)){
        array_push($errors, "Password is required");
    }
    
    if (count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($db, $query);
        if (mysqli_num_rows($result)==1){
        
        $_SESSION['username']=$username;
        $_SESSION['success']="You are logged in";
        header('location: admin.php');
            
        }else{
            array_push($errors, "Wrong Username Password combination");
        }

    }}
	
	


//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>
    
