<?php 

	require_once("core/init.php");

	if ( !isset($_SESSION["user"]) ) {
		header("Location:login.php");		
	}	
	require_once("view/header.php");
 ?>

<h1>WELCOME <?= $_SESSION["user"]; ?></h1>
<br>


 <?php require_once("view/footer.php") ?>