<!DOCTYPE html>
<html>
<head>
	<title>Book Test Drive</title>


</head>
<body bgcolor="pink">
<?php include('connection.php');?>


<div class="container" align="center"
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<form role="form" method="POST">
			<h2 style="color: red;">Fill The details </h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						FIRST NAME :
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Enter Your First Name" tabindex="1" required="true"> 
					</div>
				</div><br>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						LAST NAME :
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Enter Your Last Name" tabindex="2" required="true">
					</div>
				</div>
			</div><br>
			<div class="form-group">
				EMAIL-ID  :
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Enter Your Email Address" tabindex="3" required="true">
				</div><br>
				<div class="form-group">
					PHONE NO. :
				<input type="text" name="phone" id="phone" size class="form-control input-lg" placeholder="Enter Your Phone No." tabindex="4" required="true">
			</div><br>
		

			<div class="form-group">
			Enter a date <br>
			<input type="date" name="datepicker" id="datepicker" required="true"><br><br>

			</div>
<div class="form-group">
			  <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small" required="true"   name="time" placeholder="Enter Time">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
        </div><br>

<input type="submit" name="disbut" id="disbut" onclick="myFunction()" >


           </div>
           </form>
           </div>
           </div>
           </div>
<?php


if($_SERVER['REQUEST_METHOD']=="POST")
{
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$datepicker=$_POST['datepicker'];
	$time=$_POST['time'];
}
$sql = "INSERT INTO booking( first_name,last_name,email,phone,datepicker,time)
VALUES ('$first_name','$last_name','$email',$phone,$datepicker,'$time')";

if (!mysqli_query($conn,$sql)) 
{
  echo "error";
}
 else {
 // echo"New record created successfully";
}
?>