<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/style2.css"/>
    </head>
<body>

<h2>Please Login</h2>
<h4 id="login"></h4>
<form action="" onsubmit="return validateForm()" method="post">
    <input type="text" name="username" id="username" placeholder="Enter your username" >
    <input type="password" name="password" id="password" placeholder="Enter your password" >
    <input name="submit" class="loginbtn" type="submit" value="LOGIN">
</form>
<a class="back" href='../myform.php'>Home</a><br>
<br>
<?php echo $error; ?>


<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>This is the page for Service Provider Login Page</p>
<br>
<p>It is humbly requested to all the service provider to provide their Log in credentials properly</p>
<br>
<p>If any user wrongly visits this page please go to User Log in page</p>
<br>
<button  class="button" id="hide"> Hide Instructions</button>
<button  class="button" id="show">Show Instructions</button>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="../js/loginJS.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>





</html>