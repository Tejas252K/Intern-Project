<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()) 
{
    die("Connection failed:". mysqli_connect_errno());
}
?> 