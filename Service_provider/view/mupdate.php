<?php


include('../control/updatecheckmore.php');


?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/style2.css"/>
    </head>
<body>



<?php



$sname="";
$surl="";



if (isset($_POST['submit'])) {


    $pname=$_POST['pname'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Searchmore($conobj,"more",$pname);
// $userQuery=$connection->ShowAll($conobj,"police");

if ($userQuery->num_rows > 0) 
{
    // echo "<table><tr><th>Police Station</th><th> Station Number</th><th>District</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) 
    {

    //   echo "<tr><td>".$row["sname"]."</td><td>".$row["snumber"]."</td><td>".$row["sdistrict"]."</td></tr>";
    
    $sname=$row["sname"];
    $surl=$row["surl"];




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
     <input name="submit" type="submit" class="registerbtn" value="Search">
     <br>
     <br>
Service Name : <input type='text' name='sname' value="<?php echo $sname; ?>" placeholder="Service Name can not be updated" >

Service URL : <input type='text' name='surl' value="<?php echo $surl; ?>" >



     <input name='update' class="registerbtn" type='submit' value='Update'>

</form>
<a class="back" href="updateservices.php"> Back </a><br>
<br>

<p>Welcome to E-Governence Service</p>
<br>
<p>All the development of our country is humbly dedicated to our honourable Bangabandhu Seikh Mujib Rahman</p>
<br>
<p>Our ambition is to provide services all around Bangladesh</p>
<br>
<p>Provide Name/URL properly</p>
<br>
<p>Click Update to update existing Information</p>
<button class="button" id="hide">Hide Instructions</button>
<button class="button" id="show">Show Instructions</button>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jquery.js"></script>
</html>