<?php 
	require_once("core/init.php");

// rideirect to login
if (!isset($_SESSION["user"])) 	header("Location: login.php");
 

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$id  = $_GET["id"];
if (isset($_GET[ "id" ])) {
	$article = tampilkan_data_edit($id);

	while ($data = mysqli_fetch_assoc($article)) {
		$judulEdit = $data["judul"];
		$isiEdit     = $data["isi"];
		$tagEdit    = $data["tag"];
	}
}

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	$error  = "";
		if (isset($_POST["submit"])) {
			$judul = $_POST["judul"];
			$isi     = $_POST["isi"];
			$tag   = $_POST["tag"];

			if ( !empty( trim($judul)) && !empty( trim($isi)) && !empty( trim($tag)) ) {
					if ( tambah_data_edit($judul, $isi, $tag,  $id) ) {
						header("Location: index.php");
					} else {
						$error= "Data gagal ditambahkan";
					}
			} else {
					$error = "Tidak boleh kosong !";
			}
		}
	require_once("view/header.php");
 ?>
<main>
	<h4>Edit data</h4>
	<form action="" method="post">
		<label for="judul">Judul</label><br>
		<input type="text" name="judul" id="judul" value="<?= $judulEdit ?>">
		<br><br>

		<label for="isi">Isi</label><br>
		<textarea name="isi" id="isi" cols="30" rows="10"> <?= $isiEdit ?> </textarea>
		<br><br>

		<label for="tag">Tag</label><br>
		<input type="text" name="tag" id="tag" value="<?= $tagEdit ?>">
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