<?php 
require_once("core/init.php");

// ridirect ke halaman index
if( isset($_SESSION["user"]) ) header("Location:index.php");



	// -----------------------------------Start--------------------------------
$error = "";
if (isset($_POST["submit"])) {
	$nama = $_POST["username"];
	$pass = $_POST["password"];

	if (!empty(trim($nama)) && !empty(trim($pass)) ) {

		if ( cek_nama($nama) != 0 )  {
			if ( cek_password($nama, $pass) ) ridirect_login_register($nama);
			else $error= "Gagal login!";
		} else  $error= "Username belum ada!";
		
	} else $error= "Tidak boleh kosong!";
}

require_once("view/header.php");

// Flash massage
if (isset($_SESSION["pesan"])) {
	delete_flash_massage();
}
?>


<form action="" method="POST">
	<label for="username">Username</label><br>
	<input type="text" name="username" id="username" placeholder="username">
	<br><br>

	<label for="password">Password</label><br>
	<input type="password" name="password" id="password" placeholder="password">
	<br><br>

	<input type="submit" name="submit" value="Masuk">

	<br><br>
	<?php if ($error != '') { ?>
		<div class="error">
			<?php echo $error; ?>
		</div>
	<?php } ?>

</form>

<?php require_once("view/footer.php");?>