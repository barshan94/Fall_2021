<?php
// include('../control/db.php');
include('../model/db.php');

 $error="";
// store session data
if (isset($_POST['submit'])) {


$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Searchfire($conobj,"fire",$pname);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Fire Station</th><th>Fire Station Number</th><th>District</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["sname"]."</td><td>".$row["snumber"]."</td><td>".$row["sdistrict"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




$connection->CloseCon($conobj);

}



?>
