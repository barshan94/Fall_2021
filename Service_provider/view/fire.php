<?php
include('../control/validate_fire.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/style2.css"/>
    </head>
<body>

<form action="" method="post">
    <input type="text" name="sname" placeholder="Enter Fire Station Name" ><?php echo $validatesname ?>
    <br>
    <input type="text" name="snumber" placeholder="Enter Contact Number" ><?php echo $validatenumber ?>
    <br>
    <input type="text" name="sdistrict" placeholder="Enter District" ><?php echo $validatedistrict ?>
    <br>
    <input type="submit" class="registerbtn" value="Add">
</form>
<a class="back" href="services.php"> Back </a><br>
<br>
<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>Provide Name/Number/District properly</p>
<br>
<p>Click Add to Add New Information</p>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
</html>