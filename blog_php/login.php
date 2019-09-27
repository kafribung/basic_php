<?php 
require_once("core/init.php");
// Ridirect index
if (isset($_SESSION["user"])) {
	header("Location: index.php");
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$error = " ";
if (isset($_POST["submit"])) {
	$nama  = $_POST["username"];
	$pass   = $_POST["password"];

	if ( !empty( trim( $nama) ) && !empty( trim( $pass)) ) {
		if ( cek_nama_login($nama)) {
			if (cek_password_login($nama, $pass) ) {
				$_SESSION["user"] = $nama;
				header("Location: index.php");
			} else $error = "Ada masalah saat login";
		}  else $error = "Usernma belum ada";

	} else $error = "username dan password wajib diisi";
}



require_once("view/header.php");


?>



<h3>login</h3>

<form action="" method="post">
	<label for="username">Username</label><br>
	<input type="text" name="username" id="username">
	<br><br>

	<label for="password">Password</label><br>
	<input type="password" name="password" id="password">
	<br><br>
	<?php if ($error != " "): ?>
		<div id="error">
			<p><?= $error ?></p>
		</div>
	<?php endif ?>

	<input type="submit" name="submit">
</form>



<?php  require_once("view/footer.php"); ?>