<?php 
// Read
function tampilkan() {
	global $link;

	$query  = "SELECT * FROM blog";
	$result = mysqli_query($link,  $query);
	return $result;
}

// Create
function  tambah_data($judul, $isi, $tag)  {
	global $link;
	$judul = escape($judul);
	$isi      = escape($isi);
	$tag    = escape($tag);

	$query = "INSERT INTO blog (judul, isi, tag) VALUES ( '$judul', '$isi', '$tag' )";
	return run_query($query);
}

// Update edit.php
function tampilkan_data_edit($id) {
	global $link;
	$query  = "SELECT * FROM blog WHERE id=$id";
	return run_result($query);

}

// Update edit.php 
function tambah_data_edit($judul, $isi, $tag,  $id) {
	$judul = escape($judul);
	$isi      = escape($isi);
	$tag    = escape($tag);

	$query = "UPDATE blog SET  judul= '$judul', isi= '$isi',  tag= '$tag' WHERE  id= $id";

	return  run_query($query);
}

// Delete delete.php
function hapus($id) {
	$query = "DELETE FROM blog WHERE id=$id ";
	return run_query($query);
}


// Seacrh index.php
function tampilkan_cari($cari){
	global $link;
	$query = "SELECT * FROM blog WHERE judul  LIKE '%$cari%' ";

	return  run_result($query) ;
}

// Menyigkat string index.php
function excerpt($string) {
	$string =  substr($string, 0, 30);
	return $string  . "......";
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~REFACTORING~~~~~~~~~~~~~~~~~~~~~~~~`

// Sqli Injection
function escape($data) {
	global $link;
	return mysqli_real_escape_string($link, $data);
}

// qeury universal 
function  run_query($query){
	global $link;

	if (mysqli_query($link, $query)) 	return true;
	else return false;
}

// result universal
function run_result($result) {
	global $link;
	return mysqli_query($link, $result);
}
?>
