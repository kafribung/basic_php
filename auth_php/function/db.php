<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "login_register_php";

$link = mysqli_connect($host, $user, $pass, $db) or die("Bung DB mu error " . mysqli_error());
 ?>