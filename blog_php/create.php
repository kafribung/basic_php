<?php 
	require_once("core/init.php");

	// Riderect to login
	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
	}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	$error  = "";
		if (isset($_POST["submit"])) {
			$judul = $_POST["judul"];
			$isi     = $_POST["isi"];
			$tag   = $_POST["tag"];

			if ( !empty( trim($judul)) && !empty( trim($isi)) && !empty( trim($tag)) ) {
					echo "data berhasil ditambahkan";
					if ( tambah_data($judul, $isi, $tag) ) {
						header("Location: index.php");
					} else {
						$error=  "Data gagal ditambahkan";
					}
			} else {
					$error = "Tidak boleh kosong !";
			}


		}

	require_once("view/header.php");
 ?>
<main>
	<h4>Tambah data</h4>
	<form action="" method="post">
		<label for="judul">Judul</label><br>
		<input type="text" name="judul" id="judul">
		<br><br>
		<label for="isi">Isi</label><br>
		<textarea name="isi" id="isi" cols="30" rows="10"></textarea>
		<br><br>
		<label for="tag">Tag</label><br>
		<input type="text" name="tag" id="tag">
		<br><br>	

		<?php if ($error != "")  : ?>
		<div id="error">
			<?php echo $error; ?>
		</div>
		<?php endIf ?>

		<input type="submit" name="submit" value="Tambah">

	</form>
</main>

 <?php require_once("view/footer.php"); ?>