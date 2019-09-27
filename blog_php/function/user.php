<?php 

// Cek data login (login.php)
function cek_nama_login($nama) {
	global $link;
	$nama  = escape($nama);

	$query = "SELECT * FROM users WHERE username='$nama'";
	$result = mysqli_query($link, $query);
	if (mysqli_num_rows($result) != 0) {
		return true;
	} else return false;

	
}

// login cek password
function cek_password_login($nama, $pass){
	global $link;
	$nama = escape($nama);
	$pass  = escape($pass); 

	$query = "SELECT password FROM users WHERE username='$nama'";
	$result= mysqli_query($link, $query);
	$row   = mysqli_fetch_assoc($result)["password"];

	if (password_verify($pass,  $row)) {
		return true;
	} else return false;
}

// Cek nama register 
function cek_nama_register($nama){
	global $link;
	$nama = escape($nama);

	$query  = "SELECT * FROM users WHERE username='$nama'";
	$result = mysqli_query($link, $query);
	return mysqli_num_rows($result);
}



// Register 
function register_user($nama, $pass) {
	global $link;
	$nama = escape($nama);
	$pass  = escape($pass);
	$pass  = password_hash($pass, PASSWORD_DEFAULT);

	$query  = "INSERT INTO users (username, password) VALUES ('$nama', '$pass')";
	if ($result =mysqli_query($link, $query)) {
			return true;
		} else return false;
		

}

// Super Admin (index.php)
function admin($nama) {
	global $link;
	$nama = escape($nama);

	$query = "SELECT role FROM users WHERE username='$nama'";
	$result = mysqli_query($link, $query);
	$data   = mysqli_fetch_assoc($result)["role"];
	return $data;
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~REFACTORING~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// sql injection (Sudah ada di blog.php)
// run result login
function run_result_login($query) {
	global $link;
	if ($result = mysqli_query($link, $query)) {
		if (mysqli_num_rows($result)   ) {
			return true;
		} else {
			return false;
		}
	}
}


 ?>
