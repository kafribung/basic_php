<?php  

if (isset($_POST["submit"])) {
	$tujuan = $_POST["tujuan"];
	$judul  = $_POST["subject"];
	$pesan  = $_POST["pesan"];
	$headers = 'From: webmaster@example.com' . "\r\n" .
    		'Reply-To: webmaster@example.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

	if ( mail($tujuan, $judul, $pesan, $headers) ){
		echo "Email berhasil dikirim";
	} else {
		echo "Email gagal dikirim !";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send Email</title>
</head>
<body>
	<form action="" method="post">
		<input type="email" name="tujuan" placeholder="tujuan">
		<br><br>
		<input type="text" name="subject" placeholder="subject">
		<br><br>
		<textarea name="pesan" id="" cols="30" rows="10">Isi pesan</textarea>
		<br><br>
		
		<input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>