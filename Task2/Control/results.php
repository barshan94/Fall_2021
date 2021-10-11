<?php
$fname="";
$lname="";
$age="";
$password="";
$email="";
$checkbox="";
$radio="";
$radio2="";
$v1=$v2=$v3="";
$fname=$lname=$email=$designation=$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$pass=$_REQUEST["password"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5) || preg_match('~[0-9]+~', $_REQUEST["fname"]) )
{
    $fname= "You must enter your first name";
}
else
{
    $fname=$_REQUEST["fname"];
}

if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5) || preg_match('~[0-9]+~', $_REQUEST["lname"]) )
{
    $lname= "You must enter your last name";
}
else
{
    $lname=$_REQUEST["lname"];
}

if(empty($_REQUEST["age"]) )
{
    $lname= "You must enter your age";
}
else
{
    $age=$_REQUEST["age"];
}


if(isset($_REQUEST["designation"]))
{
    $radio= $_REQUEST["designation"];
}
else{
    $radio= "Please select at least one post.";
}

if(isset($_REQUEST["language"]))
{
    $radio2= $_REQUEST["language"];
}
else{
    $radio2= "Please select at least one language.";
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $email="you must enter email";
}
else
{
    $email= "your email is ".$email;
}

if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<8))
{
    $password= "You must enter a valid password";
}
else
{
    $password= "PASSWORD WAS ACCEPTED";
}


}
?>