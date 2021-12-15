
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/style2.css"/>
    </head>
<body>

<h2>Search</h2>

<form action="" method="post">
  
   Service name  <input type="text" name="pname"  >
  
    <input name="submit" type="submit" class="registerbtn" value="Search">
</form>
<a class="back" href="sservices.php"> Back </a><br>
<br>

<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>Provide Name/URL properly</p>
<br>
<p>Click Search to search existing Information</p>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
</html>
<?php
include('../control/SearchControlmore.php');

?>
<?php echo $error; ?>