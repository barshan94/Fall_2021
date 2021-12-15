<?php
// include('db.php');
include('../model/db.php');

if (isset($_POST['update'])) {


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Updatemore($conobj,"more",$_POST['sname'],$_POST['surl']);
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
