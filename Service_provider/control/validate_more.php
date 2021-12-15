<?php
include "connections.php";

include('../model/db.php');

$validatesname="";
$validatenumber="";
$name="";
$number="";
if($_SERVER["REQUEST_METHOD"]=="POST")

{
$name=$_REQUEST["sname"]; 
$number=$_REQUEST["snumber"];

if(empty($name) || (strlen($name)<3) || empty($number) || (strlen($number)<5))
{
    $validatesname= "You must enter Name";
    $validatenumber= "You must enter Number";
}
else
{
$query= "insert into more (sname, surl) VALUES ('$name', '$number')";
$row = insert($query);
if($row == 1)
{
echo "Successfully insert!";
}
else
{
echo "Failed!";
}
}
}
?>