<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "automobile";
$connection = mysqli_connect($host,$username,$password,$database);
//echo"connected";
if(!$connection)
    die("<p>Connection Failed Please Check</p>");

?>