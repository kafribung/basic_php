<?php 


function tambah_data($judul, $kategori, $isi, $gambar ) {
	global $link;
	$judul      = escape($judul);
	$kategori = escape($kategori);
	$isi			= escape($isi);
	$gambar;

	$query = "INSERT INTO tambah_data (judul, kategori, gambar, isi) VALUES ('$judul', '$kategori' ,'$gambar', '$isi')";

	if (mysqli_query($link, $query)) return true;
	else false;
}

function escape($nama) {
	global $link;
	return mysqli_real_escape_string($link, $nama);
}

function munculkan_session() {
	echo $_SESSION["msg"];
	session_unset($_SESSION["msg"]);
}

 ?>

