<?php
// include('db.php');
include('../model/db.php');

if (isset($_POST['delete'])) {

    $pname=$_POST['surl'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Deletemore($conobj,"more",$pname);
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
