<?php
require_once("core/init.php");

if (!isset($_SESSION["user"])) 	header("Location: login.php");


$id  =  $_GET["id"];

if (  isset ($_GET["id"]) ) {
	if ( hapus($id) ) {
		header("Location: index.php");
	} else echo "Data gagal di hapus";
} 
?>