<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Implode & Explode</title>
</head>
<body>
	<!-- implode digunakan untuk menyatukan array menjadi string -->
	<!-- explode digunakan untuk menyatukan string menjadi array -->

	<h2>1.Implode & explode</h2>
	<?php 
	    // ------------------------implode(separator, array)
		$string = ["Kafri", "Develover", 20];
		echo implode(" ", $string);
		echo "<br>";

		// ------------------------explode(separator, string, pembatas(Optional))
		$text = "HTML CSS javascrip PHP";
		print_r( explode(" ", $text, 2) ); 

		echo "<br>";
	 ?>

	 <h2>Date</h2>
	 <?php 
	 	// --------------------------date
		echo date("d -F - Y");
	  ?>

	  <h2>trim & strip tags</h2>
	  <?php 
	  		// -------------------------------------trim
	  		// digunakan untuk menghilangkan spasi pada kalimat yang diinputkan oleh user
	  		$kalimat = "  saya lagi belajar ngoding PHP, do'akan ";
	  		echo "Sebelum pakai fungsi trim" . $kalimat;
	  		echo "<br>";
	  		echo "Sesudah pakai fungsi trim" . trim($kalimat);

	  		// --------------------------------------- htmlspecialchars------
	  		// digunakan untuk mengamankan web dari user yang nakal
	  		$inputUser = "<script> alert('input')</script>";
	  		echo htmlspecialchars($inputUser, ENT_QUOTES);

	  		$inputUser2 = "<h4>Haloooo</h4> PHP";
	  		echo  strip_tags($inputUser2);
	  		// membolehkean elemen tertentu
	  		echo  strip_tags($inputUser2, "<h4>") ; 

	  		

	   ?>
</body>
</html>