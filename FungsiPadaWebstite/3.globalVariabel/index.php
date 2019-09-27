<!-- Sayrat untuk menggunakan session -->
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Global Variabel</title>
</head>
<body>

	<?php
		// --------------------- SUPER GLOBAL ARRAY-----------------------
		// echo $_SERVER['SERVER_ADDR'];
		// die();


		//-----------------------------get--------------------------------
		//beruguna untuk mengambil data dan memunculkannya di url 

		// if (isset($_GET["submit"])) {
		// 	echo $_GET["nama"]; 
		// 	echo "<br>";
		// 	echo $_GET["password"];
		// }

		// --------------------------post-------------------------------
		// Untuk mengirim data tetapi tidak memunculkan di url

	// if (isset($_POST["submit"])) {
	// 		echo $_POST["nama"]; 
	// 		echo "<br>";
	// 		echo $_POST["password"];
	// 	}


	// ----------------------------------Login-------------------
	$user = "admin";
	$pass = "123";

	if ( isset( $_POST["submit"]) ) {
		if ($_POST["nama"] == $user && $_POST["password"] == $pass) {
			echo "<script>alert('Anda berhasil login')</script>";

			// ------------------------cookie------------------------
			// digunakan untuk menyimpan data dibrowser client
			// setcookie(key, name, expire)
			
			setcookie("user_name", $_POST["nama"], time()+180);

			// ------------------------session------------------------
			$_SESSION["user_name"] = $_POST["nama"];




			// Memindahkan halaman
			header("Location: profil.php?nama=".$user);
		} else {
			echo "Username dan password salah";
		}
	}


		
	?>

	<form action="" method="POST">
		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama">
		<br>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<br>
		<input type="submit" name="submit" value="Kirim">
	</form>


	
</body>
</html>