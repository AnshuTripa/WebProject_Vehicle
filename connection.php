<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli("localhost","root","");
if($conn-> connect_error)
{
	echo"connection not succesfully";
}
else{
	echo"connection succesfully";
}
?>