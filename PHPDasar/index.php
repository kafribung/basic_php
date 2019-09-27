<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Dasar</title>
</head>
<body>
	<?php 
		// PHP Basic
	echo "<h2>Belajar PHP</h1>";
	echo "<p>Harus BISA </P>";

		// ------------------------Type data string
		// $string = "Kafri";
		// $string2 = "Fuad";

		// echo $string . " dan " . $string2;

	print "<br><br>";

		// ---------------------Tipe data integer dan float---------------
	$angka  = 1001;
	$angka2 = 3.15;
	$angka3 = 10;

		// echo "Hasil penjumlahan = " . ($angka + $angka2);

		// ----------------Operator aritmatik-------------------
		// + * / - %

		// $angka2 = $angka3 + $angka;
		// echo $angka2;

		// --------------------Metode Math-------
		// round ,rand(min, max), min, max

		// echo round($angka2). "<br>";
		// echo rand(5, 10). "<br>";
		// echo min(1,5,10). "<br>";


		// -------------------String method---------
		// strlen(string) str_word_count(string)
		// str_replace(search, replace, subject)
		// str_repeat(input, multiplier)

	;

		// $text = "Dandi anak UI UX ";
		// echo str_repeat(str_replace("Dandi", "Bung", $text), 2);

		// ----------------------Array--------------------
		// $array  = array("Gas", "Galon", "Kompor", "Gas");
		// $array2 = ["Siqa", "Atiqa", "Mufli", "Aidil"]; 
		// print_r($array);
		// echo $array2[2];

		// --------------------Array Method -----------------
		// array_unique(array)Unik, array_reverse(array)Membalik, shuffle(array)//mengacak, count(var)Jumlah, sort()Urutkan

		// print_r(array_unique($array));
		// print_r(array_reverse($array));
		// sort($array);
		// print_r($array);


		// ------------------Array Asosiatif-----------------
		// $data = ["nama"=>"Kafri Bung", "umur"=>10, "pekejaan"=>"develover"];
		// $Data = ["istri"=>"belum ada", "laptop"=>"acer swfit"];

		// print_r("nama saya = " . $data["nama"] . "<<<>");
		// $data["umur"] = 20;

		// print_r("Umur saya = " . $data["umur"]);

		// ----------------Method Array Asosiatif ----------------
		// array_values(input)Untuk merubah arr asosiati menjadi array numerik, 
		// array_keys(input)Untuk menampailkan key array, array_merge(array1)

		// $info = ["nama"=>"Kafri Bung", "jk"=>"Laki-laki", "hobby"=>"ngoding"];
		// $info2 = ["pacar"=>"belum ada", "hp"=>"vivo"];
		// print_r(array_values($info));
		// echo " <br>";
		// print_r(array_keys($info));
		// echo " <br>";
		// print_r(array_merge($info2, $info)); 


		// ----------------Array Multi dimensi---------------
		// $mahasiswa = [
		// 				["Kafri Bung", "Mamuju", "Islam"],
		// 				["Hadrian", "Kolaka", "Islam"],
		// 				["Andar", "Luwu", "Atheis"]
		// 			 ];
		/* 00 01 02
		   10 11 12
		   20 21 22
		*/		 
		 // print_r($mahasiswa);
		 // echo $mahasiswa[2][1];

		 // ------------Loop For----------------
		 // for ($i=0; $i < 5 ; $i++) { 
		 // 	echo "mahasiswa ke ". ($i+1) . " ";
		 // }

		 // -----------------------Mengeluarkan isi array------------------- 
		   // for berguna untuk menentukan key yang mana yang mau ditampilkan

		 // $hari = ["senin", "selasa", "rabu", "kamis"];
		 // for ($x=0; $x<count($hari) - 1; $x++) { 
		 // 	echo "Hari ini hari ". $hari[$x] . "<br>";
		 // }

		 // ------------------------For each array----------------------
		 	// Kelebihan: syntaxnya simple
		 	// Kekurangan: menampilkan semua isi array
		 // foreach ($hari as $h) {
		 // 	echo "Hari = " . $h.  "<br>";
		 // }



		 // -------------------For each asosiatif array -------------------
		   // $bio = ["nama"=>"Fuad", "kelas"=>5, "agama"=>"islam"];

		   // foreach ($bio as $key => $value) {
		   // 		// echo $key;
		   // 		echo $value;
		   // }


		  // -----------------------While dan do while -------------------
		   // $hewan = ["Kambing", "Ayam", "Kuda", "Sapi"];
		   // $i = 0;
		   // while ( $i < count($hewan)) {
		   // 		echo "Nama Hewan = " . $hewan[$i];
		   // 		$i++;
		   // }
		   // echo "<br>";

		   // $x=0;
		   // do {
		   // 		echo "-------";
		   // 		echo $hewan[$x];
		   // 		$x++;
		   // } while ( $x <count($hewan));

		   // ----------------------------Tipe data boolean---------------
		   // $hasil = true;
		   // $hasil2= false; 


		   // -----------------------------If Else------------------------
		   // $user = "bung";
		   // if ($user == "bungq") {
		   // 		echo "Berhasil !";
		   // } else {
		   // 		echo "Gagal Masuk !";
		   // }

		   // ---------------------------Operator Logika-------------------
		   // == === < <= > >= !=
		   // $nilai = 200;
		   // $nilai2 = 200;

		   // if ($nilai != $nilai2) {
		   // 		echo  $nilai . " tidak sama dengan " . $nilai2;
		   // } else {
		   // 		echo  $nilai2. " sama dengan " . $nilai;
		   // }



		   // ----------------------------Lebih dari satu syarat--------------------
		   // $uangProgrammer = 1000;
		   // $uangDesigner   = 4000;
		   // $keyboard       = 2000;

		   // if ($uangProgrammer > $keyboard) {
		   // 		echo "Programmer berhasi membeli keyboard <br>";
		   // } else if ($uangDesigner > $keyboard *2) {
		   // 		echo "Designer berhasil membeli 2 keyboard";
		   // } else {
		   // 		echo "Uang tidak cukup !";
		   // }


		   // ------------------------------Nested If--------------------
		   // $uangProgrammer = 1000;
		   // $uangDesigner   = 4000;
		   // $keyboard       = 2000;

		   // if ($uangProgrammer > $keyboard) {
		   // 	echo "Berhasi membeli keyboard <br>";
		   // } else if ($uangDesigner > $keyboard) {
		   // 	echo "Berhasil membeli  keyboard";

		   // 	if ($uangDesigner >= $keyboard * 2){
		   // 		echo "Designer berhasil membeli 2 keyboard";
		   // 	}
		   // 	else {
		   // 		echo "Uang tidak cukup !";
		   // 	}

		   // -----------------------------&& atau || ------------------
		   	// $uangProgrammer = 1000;
		   	// $uangDesigner   = 4000;
		   	// $keyboard       = 2000;

		   	// if ($uangProgrammer > $keyboard || $uangDesigner > $keyboard ) {
		   	// 	echo "Berhasi membeli keyboard <br>";
		   	// } else if ($uangDesigner >= $keyboard * 2) {
		   	// 	echo "Designer berhasil membeli 2 keyboard";
		   	// } else {
		   	// 	echo "Uang tidak cukup !";
		   	// }


		   // -----------------------Switch Case ----------------------
		   // $makanan = "ayam";

		   // switch ($makanan) {
		   // 	case 'ayam':
		   // 		echo "Muncul ayam";
		   // 		break;
		   // 	default:
		   // 		echo "Pilihan tidak ada!";
		   // 		break;
		   // }






		   // ------------------ Fungsi pada php-------------------
		   // function nama(){
		   // 		echo "Kafri Bung lagi belajar PHP";
		   // }

		   // nama();

		   // ----------------------Parameter dan argumen----------------
		   // function cetak_layar($text) {
		   // 		$text = "Lagi Belajar " . $text;
		   // 		echo "--------------";
		   // 		echo $text;
		   // 		echo "---------------";
		   // }
		   // cetak_layar("PHP");

		   // --------------------return----------------------------
		   // tidak langgsung menampilkan nilai ketika tidak di echo
		   // dengan menggunakan return nilai yang dikembalikan dapat di olah
		   // function penjumlahan($x, $y) {
		   // 		$z = $x + $y;
		   // 		return $z;
		   // }

		   // $hasil = penjumlahan(4,2) * 10;
		   // echo $hasil;


		   // --------------------scope---------------
		   // PHP masuk dalam kategori scope function
		   // $i = 2;

		   // if ($i % 2 == 0) {
		   // 	 $genap= true;
		   // }

		   // if($genap) {
		   // 		echo "Bilangan genap";
		   // }

		   // $a = 2;
		   // $b = 5;

		   // function perkalian(){
		   // 		// global $a, $b;

		   // 		// $z = $GLOBALS['a'] *  $GLOBALS['b'];
		   // 	// $z = $a * $b;

		   // 	return $z;
		   // }

		   // echo perkalian();


		   // ----------------------anonymous function----------------
		   // $tulisan = function($text) {
		   // 		echo $text;
		   // };

		   // $tulisan("Saya lagi belajar ngoding");


		   // ---------------------------callback----------------

		   function memanggil($callback) {
		   		// $callback();
		   			// atau
		   		// call_user_func($callback);


		   		// untuk mengecek apakah dia function atau bukan
		   	   if (is_callable($callback)) {
		   	   		echo "Benar function";
		   			call_user_func($callback, "Kafri Bung PHP");
		   	    		
		   	    } else {
		   	    	echo "Bukan function";
		   	    }

		   }

		   $yangDitampilkan = function($text){
		   		echo $text;
		   };

		   memanggil($yangDitampilkan);

		   // ----------------------------Mengaktifkan fitur Eroor---------
		   // phpinfo();
		   // cari php.ini


		   // ---------------------------Debugging--------------------
		   // print_r , var_dump(), die();

		   $anak = ["Joni", "Iskandar", "Bobi"];
		   var_dump($anak)



































		   ?>
		</body>
		</html>