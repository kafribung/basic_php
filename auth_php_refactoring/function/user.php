<?php 

function register_user($nama, $pass) {
	global $link;

	// Mencegah sql injection 
	$nama = escape($nama);
	$pass = escape($pass);

	// Enskripsi password
	$pass = password_hash($pass, PASSWORD_DEFAULT);

	$query = "INSERT INTO users (username, password) VALUES ('$nama', '$pass')";

	if (mysqli_query($link, $query) ) return true;
	else return false; 
}


// ----------------------Cek nama----------------------------
// Tidak dipakai sudah di refac
function register_cek_nama($nama) {
	global $link;
	$nama = escape($nama);

	$query = "SELECT * FROM users WHERE username = '$nama' ";

	if ( $data = mysqli_query($link, $query) ) {
		if (mysqli_num_rows($data) == 0) {
			return true;
		} else {
			return false;
		}
	}
}

// *******************************LOGIN********************************

// Cek nama login
// Tidak dipakai sudah di refac

function login_cek_nama($nama){
	global $link;

	$nama  = escape($nama); 
	$query = "SELECT * FROM users WHERE username = '$nama'";

	if ($data= mysqli_query($link, $query)) {
		if (mysqli_num_rows($data) != 0) {
			return true;
		} else {
			return false;
		}
	}
}


function cek_password($nama, $pass) {
	global $link;
	// Mencegah sql injection 
	$nama  = escape($nama);
	$pass  = escape($pass);

	$query = "SELECT password FROM users WHERE username ='$nama' ";
	$result= mysqli_query($link, $query);
	$hash= mysqli_fetch_assoc($result)["password"];

	if (password_verify($pass, $hash) ) return true;
	else return false;
	
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~REFACTORING~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// function mencegah sql_injection
function escape($data){
	global $link;
	return mysqli_real_escape_string($link, $data);
}

// ridirect
function ridirect_login_register($nama) {
	$_SESSION["user"] = $nama;
	header("Location: index.php");
}

// Cek nama refac
function cek_nama($nama){
	global $link;

	$nama  = escape($nama); 
	$query = "SELECT * FROM users WHERE username = '$nama'";
	$result= mysqli_query($link, $query);
	
	return mysqli_num_rows($result);
}

// delete flash massage

function delete_flash_massage(){
	echo $_SESSION["pesan"];
	session_unset($_SESSION["pesan"]);
}

// Admin
function admin($nama) {
	global $link;

	$query = "SELECT role FROM users WHERE username='$nama'";
	$result= mysqli_query($link, $query);
	$data  = mysqli_fetch_assoc($result)["role"];
	
	if ($data == 1) return true;
	else return false;
}

?>