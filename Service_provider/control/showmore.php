<?php
// include('../control/db.php');
include('../model/db.php');


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowM($conobj,"more");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Service Name</th><th> Service URL</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["sname"]."</td><td>".$row["surl"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




$connection->CloseCon($conobj);





?>
