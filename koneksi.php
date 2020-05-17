<?php

$server="localhost";
$user="root";
$pass="";
$database="undangan";

//koneksikan ke server
$conect=mysqli_connect($server,$user,$pass,$database) or die('Error Connection Network');
$hostname="http://localhost/undangan2/";
?>
