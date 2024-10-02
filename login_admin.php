<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_booking_system";

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	echo"connection not succesful";
}
else{
	//echo"connection succesful";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In Form</title>

</head>
<style >
     .form{
	text-align:center;
}
</style>
<body class="form" >
	<div >
		
		<h1>Admin Login</h1>
		<form action="" method="POST">
		

		<p> Username</p>
		<input type="text" name="username" placeholder="Username">
		<p>Password</p>
		<input type="password" name="password" placeholder="Password"> <br> 
		<br>
	    <input type="submit" value="Login">
	    <center>
         <br> <a href="signup_admin.php">Signup</a>  
	</center>
	  </form>
	</div>

</body>
</html>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
	
  if($count == 1){  
	  echo "<h1><center> Login successful </center></h1>";  
	  header('location:admin.php');
  }  
  else{  
	  // echo "<h1> Login failed. Invalid username or password.</h1>";  
  }
?>  