<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
<style>
	.header{

    color:rgb(255, 250, 250);
    background-color: rgb(241, 120, 21);
    background-size: cover;
    font-size: 30px;
    font-family: Arial;
    text-align: center;
    height:40px;
    align-items: center;

	}
	nav{
    font-family: 'Josefin Sans', sans-serif;
    width:100%;
    height: 8vh;
    background:rgba(0,0,0,0.5);
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;


}
nav .menu{
    width: 30%;
    text-align: right;
    display: inline-flex;
    justify-content: space-around;
}
nav .menu a{
    color: cornsilk;
    text-decoration: none;
}
nav .menu a:hover{
    color: rgb(255, 72, 0);
}

nav .logo a{
   color: cornsilk;
   width:15%;
   text-align: left;
   font-size: 20px;
   text-decoration: none;
}

</style>
</head>
<body bgcolor="#FAEBD7">
	<h2 class="header" >ADMIN PANEL</h2>
	 <nav>
            <div class="logo">
               <a href="admin.php"> <h4 > &nbsp; &nbsp; &nbsp; &nbsp;HOME</h4></a>
            </div>
            <div class="menu">
                <a href="admin_car.php">CAR</a>
                <a href="admin_driver.php">DRIVER</a>
                <a href="feedback.php">FEEDBACK</a>
            </div>
        </nav>
        <img src="bg2.jpg" width="992px" height="550px">
</body>
</html>