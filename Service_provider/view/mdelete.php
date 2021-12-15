
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/style2.css"/>
    </head>
<body>

<?php

include('../control/deletecheckmore.php');
$sname="";
$snumber="";
$sdistrict="";

if (isset($_POST['submit'])) {

    $pname=$_POST['pname'];
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->Searchmore($conobj,"more",$pname);


if ($userQuery->num_rows > 0) 
{

    while($row = $userQuery->fetch_assoc()) 
    {
    
    $sname=$row["sname"];
    $snumber=$row["surl"];


    }

}
}
   

?>
<form action='' method='post'>
<h2>Delete Page</h2>  
     <input type="text" name="pname" placeholder="Enter Something">
     <input name="submit" type="submit" class="registerbtn" value="Search">
     <br>
     <br>

</form>

<form action="" method='post'>

Service Name : <input type='text' name='sname' value="<?php echo $sname; ?>" placeholder="Ambulance Name can not be updated" >

Service URL : <input type='text' name='surl' value="<?php echo $snumber; ?>" >



     <input name='delete' type='submit' class="registerbtn" value='Delete'>

  
</form>
<a class="back" href="delete.php"> Back </a><br>
<br>
<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>Provide Name/URL properly</p>
<br>
<p>Click Delete to delete existing Information</p>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
</html>