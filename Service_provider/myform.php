<?php 
include "control/results.php"; 
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/style2.css"/>


</head>

<body>
    
<div><h1>Registration form </h1></div>
<hr>
<h4 id="mytext"></h4>
<div class="container">
<form action="" onsubmit="return validateForm()" method="post">



Name          : <input type="text" id="fname" name="fname"> <?php echo $validatefname; ?>
<br>
User name           : <input type="text" id="lname" name="lname" onkeyup="myajaxfunc()"> <?php echo $validatelname; ?>
<h5 id="message"></h5>

Age                 : <input type="number" id="age" name="age"> <?php echo $validateage; ?>
<br>


E-mail              : <input type="email" id="email" name="email"> <?php echo $validateemail; ?>
<br>

Password            : <input type="password" id="password" name="password"> <?php echo $validatepass; ?>
<br>

Mobile          : <input type="text" id="mobile" name="mobile"> <?php echo $validatemobile; ?>
<br>


<input type="submit" class="registerbtn" name="submit" value="Sign-Up">
<input type="reset" class="resetbtn" value="Reset">
</div>
</form>
<div class="instruction">
<a class="loginbtn" href="view/login.php">Login</a><br>
<!-- <a href="view/login.php">Login</a><br> -->
<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>This is the page for Service Provider Page</p>
<br>
<p>It is humbly requested to all the service provider to provide their information properly</p>
<br>
<p>If any user wrongly visits this page please go to User Log in page</p>
<br>
<button  class="button" id="hide"> Hide Instructions</button>
<button  class="button" id="show">Show Instructions</button>
</div>
</body>

<script src="js/myjs.js">
    
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>






</html>


<style>

  div > h1{
    color: black;
  }

  .loginbtn:hover {
  /* color: #ff0000; */
  color:grey;
  
}
.loginbtn{
    text-decoration: none;
}

h1::first-line {
  color: black;
  font-variant:small-caps;
}


</style>