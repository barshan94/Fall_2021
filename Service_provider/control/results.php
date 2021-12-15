<?php
include "control/connections.php";
// include("../model/db.php");

$validatefname="";
$validatelname="";
$validateemail="";
$validatepass="";
$fname=$email="";
$validatemobile="";
$validateage="";
$mobile="";
$lname="";
$age="";
$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")

{
$fname=$_REQUEST["fname"]; 
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];
$age=$_REQUEST["age"];
$mobile=$_REQUEST["mobile"];
if(empty($fname) || (strlen($fname)<5) || empty($mobile) || (strlen($mobile)<11) || empty($age) || empty($lname) || (strlen($lname)<5) || empty($pass) || (strlen($pass)<6) || empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validatefname= "You must enter First Name";
    $validatemobile= "You must enter Mobile Number properly";
    $validateage= "You must enter Age properly";
    $validatelname= "You must enter User Name";
    $validatepass="You must enter Valid Password";
    $validateemail="You must enter Email";

}

else
{
$query= "insert into service_provider (name, uname, age, email, pass, mobile) VALUES ('$fname', '$lname', $age, '$email', '$pass', '$mobile')";
//$query= "insert into service_provider (fname, uname, age, mobile, pwd) VALUES ('bgb', 'bgb1', 35, '21365478901', '123456')";
$row = insert($query);
if($row == 1)
{
echo "Successfully Registered";


}
else{
echo "Failed to complete registration!";
}

}


}
?>