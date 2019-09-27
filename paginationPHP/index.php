<?php 
$host  = "localhost";
$name = "root";
$pass  = "";
$db     = "blog_php";

$link   = mysqli_connect($host, $name, $pass, $db) or die("DB error" .  mysqli_error());

$perPage = 3; //Perhalaman
$page      =isset( $_GET["halaman"] ) ? (int)$_GET["halaman"] : 1;
$start     =($page > 1) ? ($page * $perPage ) - $perPage: 0;

$article  = "SELECT * FROM blog LIMIT $start, $perPage";
$result  = mysqli_query($link, $article);

$all        = "SELECT * FROM blog";
$result2= mysqli_query($link, $all);

$total = mysqli_num_rows($result2);

$pages = ceil(  $total / $perPage);

 ?>

<?php while ($row = mysqli_fetch_assoc($result) ) : ?>
	<?php echo $row["judul"]; ?>
<?php endWhile; ?>

 <div class="">
 	<?php for ($i=1; $i <= $pages ; $i++) : ?>
 		<a href="?halaman=<?= $i ?>" > <?= $i ?> </a>
 	<?php endFor; ?>
 </div>