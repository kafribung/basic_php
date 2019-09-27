<?php 

	// --------------------------------------Menghubungkan DB-----------------------
$host  = "localhost";
$user  = "root";
$pass  = "";
$db     = "kampus";

$mysqli = new mysqli($host, $user, $pass, $db );

// --------------------------------------Menampilkan error-----------------------

// if ($mysqli->connect_errno) {
// 		echo "DB gagal di muat " .  $mysqli -> connect_error();
// } else echo "Berhasil";

// --------------------------------------Memasukkann Data-----------------------
// $sql = "INSERT INTO mahasiswa (nama, alamat) VALUES ('Dimas',  'Aceh')";

// if ($mysqli-> query($sql)) {
// 	echo "Berhasil";
// } else echo "Gagal " . $mysqli-> error;

// --------------------------------------Multy query-------------------------------

// $sql  = "INSERT INTO mahasiswa (nama, alamat) VALUES ('Suarmin', 'Bulukumba'); ";
// $sql .= "INSERT INTO mahasiswa (nama, alamat) VALUES ('Bela', 'Bau'); ";
// $sql .= "INSERT INTO mahasiswa (nama, alamat)  VALUES ('Farid', 'Pao-pao') ";

// if ( $mysqli -> multi_query($sql) ) {
// 	echo "Berhasil Cuk";
// } else echo "Gagal ditambahkan " . $mysqli -> error;

// --------------------------------------SQL injection-------------------------------
// $data = $mysqli -> real_escape_string($_GET["user"]);

// --------------------------------------Prepare  statment-------------------------------
// Kelebihan kita dapat melakukan query berulang ulang kali dan tidak lagi menggunakan real_escape_stirng
// $statment = $mysqli -> prepare("INSERT INTO mahasiswa (nama, alamat) VALUES (? ,  ?) ");
// // ss = ketika type datanya string, string. kalau integer pakai i
// $statment->bind_param("ss", $nama , $alamat);

// $nama    = "Atiqa";
// $alamat = "mamuju";
// $statment-> execute();

// --------------------------------------Menampilkan data-------------------------------

// fetc_assoc (Mengambil data menggunakan metode asosiatif)
// fetc_object (Mengambil data menggunakan metode object)

// $sql      = "SELECT * FROM mahasiswa";
// $result = $mysqli->query($sql);
//  if ($result->num_rows > 0) {
//  	 while ($row = $result -> fetch_object()) {
//  	 	echo  $row->nama . "<br>";
//  	 }
//  }

// --------------------------------------Menghapus data-------------------------------
// $sql = "DELETE FROM mahasiswa WHERE id = 16 ";

// $result = $mysqli->query($sql);

// if ($result === true) {
// 	echo "Berhasil";
// } else echo "Gagal baang";

	// --------------------------------------Mengubah data--------------------------
// $sql = "UPDATE mahasiswa SET  alamat= 'Bau-bau' WHERE nama= 'Bela' ";
// $result = $mysqli->query($sql);

// if ($result ) {
// 	echo "Berhasil Update";
// } else echo "Gagal baang";


	// --------------------------------------Select  data prepare statement--------------------------
$alamat = 'Bau-bau';
$statement = $mysqli->prepare("SELECT nama FROM mahasiswa WHERE alamat= ? ");
$statement->bind_param('s', $alamat);

$statement->execute();

$statement->bind_result($row);

while ( $statement->fetch() ) {
	echo  $row;
}







// --------------------------------------Menutup DB-------------------------
$mysqli->close();

 ?>