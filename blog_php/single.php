<?php 
	require_once("core/init.php");

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$id  = $_GET["id"];
if (isset($_GET[ "id" ])) {
	$article = tampilkan_data_edit($id);

	while ($data = mysqli_fetch_assoc($article)) {
		$judulEdit = $data["judul"];
		$isiEdit     = $data["isi"];
		$tagEdit    = $data["tag"];
		$tagTime   = $data["time"]; 
	}
}
	require_once("view/header.php");
 ?>
<div class="single_menu">
	<h2 class="single_judul"> <?= $judulEdit; ?> </h2>
	<p class="single_isi"> <?= $isiEdit; ?> </p>
	<p class="single_tag"> <?= $tagEdit ?> </p>
	<p class="single_time"> <?= $tagTime ?> </p>
</div>

 <?php require_once("view/footer.php"); ?>