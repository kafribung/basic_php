<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "blog_php";

$link = mysqli_connect($host, $user, $pass, $db) or die("DB error " . mysqli_error());

 ?>