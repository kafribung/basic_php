<?php 

function register_user($nama, $pass) {
	global $link;

	// Mencegah sql injection 
	$nama = mysqli_real_escape_string($link, $nama);
	$pass = mysqli_real_escape_string($link, $pass);

	// Enskripsi password
	$pass = password_hash($pass, PASSWORD_DEFAULT);

	$query = "INSERT INTO users (username, password) VALUES ('$nama', '$pass')";

	 if (mysqli_query($link, $query) ) {
	 	return true;
	 } else {
	 	return false;
	 } 
}


// ----------------------Cek nama----------------------------
function register_cek_nama($nama) {
	global $link;
	$nama = mysqli_real_escape_string($link, $nama);

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
function login_cek_nama($nama){
	global $link;

	$nama  = mysqli_real_escape_string($link, $nama); 
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
	$nama  = mysqli_real_escape_string($link, $nama);
	$pass  = mysqli_real_escape_string($link, $pass);

	$query = "SELECT password FROM users WHERE username ='$nama' ";
	$result= mysqli_query($link, $query);
	$hash= mysqli_fetch_assoc($result)["password"];

	if (password_verify($pass, $hash) ) {
		return true;
	} else{
		return false;
	}
}

?>