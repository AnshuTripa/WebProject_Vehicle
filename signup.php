<?php

$servername="localhost";
$username="root";
$password="";
$dbname ="vehicle_booking_system";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	echo"connection not succesfully";
}
else{

	// echo "connection succesfully";
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$username=$_POST['username'];
	$password=$_POST['password'];
}
$sql = "INSERT INTO user( username, password)
VALUES ('$username','$password')";

if (!mysqli_query($conn,$sql)) 
{
  echo "error";
}
 else {
 // echo"New record created successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-box">
		<img src="logo1.png" class="logo">
		<h1>Sign Up Here</h1>
		<form action="" method="POST">

		<p> Username</p>
		<input type="text" name ="username" placeholder="Enter Your Username">
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Your Password">
	    <input type="submit" >
	    <center>
        Have An Account  <br> <a href="index.php">Log in Here</a>  
	</center>
	  </form>
	</div>

</body>
</html>
