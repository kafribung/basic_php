<?php  
session_start();
if (!isset( $_SESSION["token"]) ) {
	$_SESSION["token"] = base64_encode(openssl_random_pseudo_bytes(32));
}

if (isset($_GET["submit"]) &&  $_SESSION["token"] == $_GET["tokenForm"] ) {
	die("User terhapus");
}
?>	


<form action="" method="get">
	<input type="hidden" name="tokenForm" value=" <?= $_SESSION['token'] ?>">
	<input type="text" name="nama">
	<input type="submit" name="submit">
</form>