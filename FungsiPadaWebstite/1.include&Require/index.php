<!-- include (Ketika namanya salah (error )perintah dibawahnya tetap akan dijalankan) -->
<!-- require (Ketika namanya salah (error) maka perintah dibawahnya tidak akan di eksekusi) -->

<!-- include_once digunakan agar fungsi include hanya di jalankan satu kali -->

<?php include_once("header.php") ?>
<?php include_once("header.php") ?>

	<main>
		<p>ini halaman utama</p>
	</main>
<?php require_once("footer.php"); ?>

