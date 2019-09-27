<?php 
	// --------------------------------Validasi gambar------------
if (isset($_POST["submit"])) {
		// print_r($_FILES);

	$nama  = $_FILES["gambar"]["name"];
	$asal  = $_FILES["gambar"]["tmp_name"];
	$error = $_FILES["gambar"]["error"];
	$size  = $_FILES["gambar"]["size"];
	$type  = $_FILES["gambar"]["type"];
	$namaFile = "image/" . $nama;

	$time = time();





		// bisa juga menggunakan
	$ex = pathinfo($nama, PATHINFO_EXTENSION);
		 // die($ex);

	if ($error == 0) {
		if ($size <= 1000000) {
			if ($type == "image/jpeg" || $type == "png") {
				if ( file_exists( $namaFile)) {
					$namaFile = str_replace(".jpg", " ", $namaFile);
					 // $namaFile .= $namaFile . "_" . $time . "." .$ex; 
					$namaFile = $namaFile . "_" . $time . ".jpg";

					move_uploaded_file($asal, $namaFile);
					echo "Gambar berhasil diupload";
					die();
				}		
					move_uploaded_file($asal, $namaFile);
					echo "Gambar berhasil diupload";

			} else {
				echo "Format gambar salah";
			}
		} else {
			echo "Ukuran gambar maksimal 1 MB";
		}
	} else {
		echo "Gambar belum di upload!";
	}
		// ----------------------Upload FIle-----------------
		// move_uploaded_file(asal, tujuan);
		// move_uploaded_file($asal, "image/" . $nama);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Gmbar</title>
</head>
<body>
	<h2>Upload Gambar</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="gambar">
		<input type="submit"  name="submit" value="upload">
	</form>
</body>
</html>