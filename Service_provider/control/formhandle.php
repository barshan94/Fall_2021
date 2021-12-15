<?php
// include("db.php");
include('../model/db.php');
// include('results.php');
// include('../js/myjs.js');

if(empty($_REQUEST["lname"]))
{
    echo "Please enter your username";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->checkunique($conobj,"service_provider",$_REQUEST["lname"]);

    if ($userQuery->num_rows > 0)
    {                                                                                        
         echo "Username exists";
         
        
    }
    else
    {
        echo "Username is unique";
    }

    $connection->CloseCon($conobj);

}






?>