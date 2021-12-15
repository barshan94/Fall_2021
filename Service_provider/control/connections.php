<?php



    function insert($query)
    {
        $conn = mysqli_connect('localhost','root','','service');
        $result = mysqli_query($conn, $query);
        return $result;
    }




?>