<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "registration";

$connection = mysqli_connect($servername,$username,$password,$dbname );

if($connection)
{
   // echo"connected successfully";
}else{
    echo "connection failed" .mysqli_connect_error();
}
?>
