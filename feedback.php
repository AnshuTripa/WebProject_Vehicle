<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
input[type=number], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}  

    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>    
</head>    
<body>

<center>   
<h2 style="color: red">FEED BACK FORM</h2>    
<div class="container">    
  <form action="" method="POST">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname" style="color:orange ">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname" style="color:orange">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname" style="color: orange">Contact No.</label>    
      </div>    
      <div class="col-75">    
        <input type="number" id="lname" name="contact" placeholder="Enter Your Contact No.">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email" style="color:orange ">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country" style="color:orange ">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back" style="color:orange ">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>    
    
</body>    
</html>    
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
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $contact=$_POST['contact'];
   $mailid=$_POST['mailid'];
  $country=$_POST['country'];
   $subject=$_POST['subject'];
}
$sql = "INSERT INTO feedback( firstname,lastname,contact,mailid,country,subject)
VALUES ('$firstname','$lastname','$contact','$mailid','$country','$subject')";

if (!mysqli_query($conn,$sql)) 
{
  echo "error";
}
 else {
 // echo"New record created successfully";
}
?>