<?php 

	require_once("core/init.php");

	if ( !isset($_SESSION["user"]) ) {
		$_SESSION["pesan"] = "Untuk mengakses halaman ini anda harus login !";
		header("Location:login.php");		
	}	

	require_once("view/header.php");
 ?>

<h1>WELCOME <?= $_SESSION["user"]; ?></h1>
<br>

<?php if ( admin($_SESSION["user"]) == 1) { ?>
	<div>
		<h3>Halo admin</h3>
	</div>
<?php } ?>

 <?php require_once("view/footer.php") ?>