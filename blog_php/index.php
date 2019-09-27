<?php 
require_once("core/init.php");
// Proteksi File

$superAdmin = $login= false;
if ( isset($_SESSION["user"]) ) {
	$login= true;
	if ( admin($_SESSION["user"]) == 1) {
		$superAdmin = true;
	}
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~START~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$article = tampilkan();

if ( isset($_GET["cari"]) ) {
	$cari  = $_GET["cari"];
	$article = tampilkan_cari($cari);
} 

require_once("view/header.php"); 
?>



<main>
	<!-- search -->
	<form action="" method="get">
		<input type="search" name="cari" id="cari" placeholder="Title search"> 
	</form>

	<?php while ( $data = mysqli_fetch_assoc($article) ) :?>
	<div class="each_article">
		<h2>   <a href="single.php?id=<?= $data['id']; ?>  ">  <?php echo $data["judul"]; ?>  </a>  </h2>
		<p class="isi"> <?php echo   excerpt($data["isi"])  ; ?></p>
		<p class="time"><?php echo $data["time"]; ?></p>
		<p class="tag"><?php echo $data["tag"]; ?></p>
		<?php if ($login == true): ?>
			<?php if ($superAdmin == true): ?>
		     <a  href=" edit.php?id=<?php echo $data['id']; ?> ">Edit</a>
			<?php endif; ?>
			 <a  href=" delete.php?id=<?php echo $data['id']; ?> "   onclick="confirm('Warning \n Apakah data ingin dihapus?  ')" >Hapus</a>			
		<?php endif; ?>
	</div>
	<?php endWhile; ?>
</main>

<?php require_once("view/footer.php") ?>

