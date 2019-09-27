<?php 
require_once("core/init.php");

if ( isset($_SESSION["user"])) header("Location: index.php");

	// -----------------------------------Start--------------------------------
$error = "";

if (isset($_POST["submit"])) {
	$nama = $_POST["username"];
	$pass = $_POST["password"];

	if ( !empty( trim($nama) ) && !empty( trim($pass) ) ) { 
		// Cek nama
		if ( cek_nama($nama) == 0 ) {
			if ( register_user($nama, $pass) ) ridirect_login_register($nama);
			else $error= "Registrasi Gagal!";
		}else $error= "Nama sudah ada, tidak bisa daftar!";

	} else $error= "Anda memasukkan karakter kosong";
}

require_once("view/header.php");
?>

<form action="" method="POST">
	<label for="username">Username</label><br>
	<input type="text" name="username" id="username" placeholder="username">
	<br><br>

	<label for="password">Password</label><br>
	<input type="password" name="password" id="password" placeholder="password">
	<br><br>

	<input type="submit" name="submit" value="Daftar">
	<br><br>

	<?php if ($error != '') { ?>
		<div class="error">
			<?= $error; ?>
		</div>
	<?php } ?>
</form>

<?php require_once("view/footer.php"); ?>