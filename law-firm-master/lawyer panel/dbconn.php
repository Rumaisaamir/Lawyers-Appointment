<?php

$host="localhost";
$username="root";
$password="";
$db="law";


$conn = mysqli_connect($host,$username,$password,$db);

if(!$conn)
{
    echo "<p>".mysqli_connect_error()."</p>";
}

?>