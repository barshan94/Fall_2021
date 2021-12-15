<?php
 include "connections.php";

include('../model/db.php');
$validatesname="";
$validatenumber="";
$validatedistrict="";
$name="";
$number="";
$district="";
if($_SERVER["REQUEST_METHOD"]=="POST")

{
$name=$_REQUEST["sname"]; 
$number=$_REQUEST["snumber"];
$district=$_REQUEST["sdistrict"];


if(empty($name) || (strlen($name)<3) || empty($number) || (strlen($number)<11))
{
    $validatesname= "You must enter Name";
    $validatenumber= "You must enter Number";
    $validatedistrict="You must enter district";

}

else
{
$query= "insert into police (sname, snumber, sdistrict) VALUES ('$name', '$number', '$district')";
$row = insert($query);
if($row == 1)
{
echo "Successfully added information";
}
else
{
echo "Failed to add information";
}

}
}
?>