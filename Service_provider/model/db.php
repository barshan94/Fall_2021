<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "service";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }


function checkunique($conn,$table,$username)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."'");
 return $result;

}





function Search($conn,$table,$pname)
{
$result = $conn->query("SELECT * FROM $table WHERE sname='$pname' OR snumber='$pname' OR sdistrict='$pname'");
return $result;
}



function Searchfire($conn,$table,$pname)
{
$result = $conn->query("SELECT * FROM $table WHERE sname='$pname' OR snumber='$pname' OR sdistrict='$pname'");
return $result;
}



function Searchambulance($conn,$table,$pname)
{
$result = $conn->query("SELECT * FROM $table WHERE sname='$pname' OR snumber='$pname' OR sdistrict='$pname'");
return $result;
}


function Searchmore($conn,$table,$pname)
{
$result = $conn->query("SELECT * FROM $table WHERE sname='$pname' OR surl='$pname'");
return $result;
}


 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."' AND pass='". $password."'");
 return $result;
 }



 function Checkpolice($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."' AND pass='". $password."'");
 return $result;
 }



 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 

 function ShowF($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


 function ShowA($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function ShowM($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }



 function UpdateUser($conn,$table,$username,$firstname,$email)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }




 function Update($conn,$table,$sname,$snumber,$sdistrict)
 {
     $sql = "UPDATE $table SET snumber='$snumber' , sdistrict='$sdistrict'  WHERE sname='$sname'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

 function Updatef($conn,$table,$sname,$snumber,$sdistrict)
 {
     $sql = "UPDATE $table SET snumber='$snumber' , sdistrict='$sdistrict'  WHERE sname='$sname'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

 function Updatea($conn,$table,$sname,$snumber,$sdistrict)
 {
     $sql = "UPDATE $table SET snumber='$snumber' , sdistrict='$sdistrict'  WHERE sname='$sname'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }


function Delete($conn,$table,$pname)
{
    $sql="DELETE from $table where snumber = '$pname'";

       if(mysqli_query($conn, $sql))
       {
           return true;
       }
       else
       {
           return false;
       }
}
 
function Deletefire($conn,$table,$pname)
{
    $sql="DELETE from $table where snumber = '$pname'";

       if(mysqli_query($conn, $sql))
       {
           return true;
       }
       else
       {
           return false;
       }
}


function Deleteambulance($conn,$table,$pname)
{
    $sql="DELETE from $table where snumber = '$pname'";

       if(mysqli_query($conn, $sql))
       {
           return true;
       }
       else
       {
           return false;
       }
}



function Deletemore($conn,$table,$pname)
{
    $sql="DELETE from $table where surl = '$pname'";

       if(mysqli_query($conn, $sql))
       {
           return true;
       }
       else
       {
           return false;
       }
}



//  function newDelete($conn,"police",$pname){
//     $result = $conn->query("DELETE FROM police WHERE sname='$pname' OR snumber='$pname' OR sdistrict='$pname'");
//  }




 function Updatemore($conn,$table,$sname,$surl)
 {
     $sql = "UPDATE $table SET surl='$surl' WHERE sname='$sname'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

 function insert($query)
 {
     $conn = mysqli_connect('localhost','root','','service');
     $result = mysqli_query($conn, $query);
     return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}

?>