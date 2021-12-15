<?php
// include('db.php');
include('../model/db.php');

if (isset($_POST['update'])) {


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Update($conobj,"police",$_POST['sname'],$_POST['snumber'],$_POST['sdistrict']);
if($userQuery==TRUE)
{
    echo "Update successfuly"; 
}
else
{
    echo "Data could not update";    
}
$connection->CloseCon($conobj);


}


?>
