<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); 
}

?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/style2.css"/>
</head>


<body>
<div class="container">
<h1>Registration And Login Page</h1>

<a class="add" href="services.php"> Add Services </a><br>
<a class="update" href= "updateservices.php" > Update Services </a><br>
<a class="delete" href="delete.php"> Delete Services </a><br>
<a class="search" href="sservices.php"> Search Services </a><br>
<a class="show" href="showservices.php"> Show Services </a><br>

<a class="back" href="../myform.php"> Home </a><br>
</div>
<br>
<h3> <a class="logout" href="../control/logout.php">Logout</a></h3>
<br>
<div class="instruction">
    <br>
    <br>
<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>This is the page Containing all services</p>
<br>
<p>Click the services as your wish</p>
<br>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>

</html>


