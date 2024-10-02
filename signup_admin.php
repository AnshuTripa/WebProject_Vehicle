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
$sql = "INSERT INTO admin ( username, password)
VALUES ('$username','$password')";

if (!mysqli_query($conn,$sql)) 
{
  echo "error";
}
 else {
 // echo"New record created successfully";
}
?>
<html>
<head>
	<title>Sign Up Form</title>

</head>
<style >
     .form{
	text-align:center;
}
</style>
<body class="form" >
	<div >
		
		<h1>Admin Signup</h1>
		
<form action="" method="POST">

		<p> Username</p>
		<input type="text" name="username" placeholder="Username">
		<p>Password</p>
		<input type="password" name="password" placeholder="Password"> <br> 
		<br>
	    <input type="submit">
	    <center>
         <br>   
	</center>
	  </form>
	</div>

</body>
</html>