<?php


include('../control/updatecheck.php');


?>

<!DOCTYPE html>
<html>
     <head>
     <link rel="stylesheet" href="../css/style2.css"/>
     </head>
<body>




<?php


$sname="";
$snumber="";
$sdistrict="";


if (isset($_POST['submit'])) {


    $pname=$_POST['pname'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"police",$pname);
// $userQuery=$connection->ShowAll($conobj,"police");

if ($userQuery->num_rows > 0) 
{
    // echo "<table><tr><th>Police Station</th><th> Station Number</th><th>District</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) 
    {

    //   echo "<tr><td>".$row["sname"]."</td><td>".$row["snumber"]."</td><td>".$row["sdistrict"]."</td></tr>";
    
    $sname=$row["sname"];
    $snumber=$row["snumber"];
    $sdistrict=$row["sdistrict"];









    }


}
}
   
//    else 
//    {
//     echo "Not Found";

// }


?>
<form action='' method='post'>
<h2>Update Page</h2>  
     <input type="text" name="pname" placeholder="Enter Something">
     <input name="submit" class="registerbtn" type="submit" value="Search">
     <br>
     <br>
Police Station Name : <input type='text' name='sname' value="<?php echo $sname; ?>" placeholder="Station Name can not be updated" >

Police Station Number : <input type='text' name='snumber' value="<?php echo $snumber; ?>" >

District : <input type='text' name='sdistrict' value="<?php echo $sdistrict; ?>" >


     <input name='update' type='submit' class="registerbtn" value='Update'>

</form>

<a class="back" href="updateservices.php"> Back </a><br>
<br>

     <p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>Provide Name/Number/District properly</p>
<br>
<p>Click Update to update existing Information</p>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
</html>