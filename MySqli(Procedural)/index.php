<?php 
	// --------------------------------------Menghubungkan DB-----------------------
	$link = mysqli_connect("localhost", "root", "", "sekolah");

	// --------------------------------------Menguji Error-----------------------
	// if (!$link) {
	// 	die( "Koneksi DB error ". mysqli_connect_error() );
	// }

	// --------------------------------------Membuat query-----------------------
	// $query = "CREATE DATABASE bung";
	
	// if ( mysqli_query($link, $query) ) {
	// 	echo "Db berhasil dibuat";
	// } else{
	// 	echo "DB gagal!";
	// }

	// --------------------------------------Memasukkan data-----------------------
	// $input = "INSERT INTO murid (nama, umur, alamat) VALUES ('fuad', '8', 'tasiu')";

	// if ( mysqli_query($link, $input) ) {
	// 	echo "Berhasil";
	// }

	// Untuk query lebih dari satu
	// $input = " INSERT INTO murid (nama, umur, alamat) VALUES ('wandi', '18', 'mamuju'); ";
	// $input .= " INSERT INTO murid (nama, umur, alamat) VALUES ('dandi', '23', 'soppeng') ";
	// if (mysqli_multi_query($link, $input)) {
	// 	echo "Multi query berhasil";;
	// }

	// --------------------------------------Menghapus data--------------------------
	$hapus = "DELETE FROM murid WHERE id = 3";
	// $hapus = "DELETE FROM murid WHERE id IN (2,5)"; 
	// $hapus = "DELETE FROM murid WHERE id BETWEEN 4 AND 6";


	// if (mysqli_query($link, $hapus)) {
	// 		echo "Data berhasil dihapus";
	// }





	// --------------------------------------Mengubah data--------------------------
	$update = "UPDATE murid SET nama='fajrin', umur=18 WHERE id=4";

	if (mysqli_query($link, $update)) {
		echo "Data berhasil di update";
	}




	// --------------------------------------Menampilkan data-----------------------
	// $read  = "SELECT * FROM murid";
	// $hasil = mysqli_query($link, $read);





	// --------------------------------------Filter data-----------------------
	// LIMIT, ORDER BY DESC ASC, WHERE
	// $read  = "SELECT * FROM murid WHERE alamat='jeneponto'";
	// $hasil = mysqli_query($link, $read);


	//  if ( mysqli_num_rows($hasil) > 0 ) {
	//  	while ( $data = mysqli_fetch_assoc($hasil) ) {
	//  		echo $data["nama"] . " <br>";
	//  		echo $data["umur"] . " <br>"; 
	//  		echo $data["alamat"] . " <br>"; 

	//  	}
	//  }




	// --------------------------------------Menutup DB-----------------------
	mysqli_close($link);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySqli - Procedural</title>
</head>
<body>
	
</body>
</html>