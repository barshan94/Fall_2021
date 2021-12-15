<?php
// include('db.php');
include('../model/db.php');

if (isset($_POST['delete'])) {

    $pname=$_POST['snumber'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Deleteambulance($conobj,"ambulance",$pname);
if($userQuery==TRUE)
{
    echo "Deleted successfuly"; 
}
else
{
    echo "Data could not delete";    
}
$connection->CloseCon($conobj);


}


?>
