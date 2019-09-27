<?php 
require_once("core/init.php");

// Cek Session
if (!$user->is_login()  ) {
	// Session::flash('login', 'Anda harus login terlebih dahulu');
	Session::flash("login", "Anda harus login terlebih dahulu");
	Redirect::to("login");

}

$sesion = Session::get("username");


// Flash massage
// if (Session::cek_session("profile")) {
// 	echo Session::flash("profile");
// }

$dataUser = $user-> get_data($sesion);
if (Input::get('nama')) {
	$dataUser= $user-> get_data(Input::get('nama') );
} else $dataUser;


require_once("templates/header.php");
?>

<h3>Hai  <?php echo $dataUser["username"]; ?></h3>

<?php if ($dataUser["username"] === Session::get("username")): ?>

	<a href="change_password.php">Ganti password</a>
	<?php if ($user->is_admin(Session::get("username")) ) :?>
		<a href="admin.php">Data User</a>
	<?php endif; ?>

<?php endif; ?>

<?php  require_once("templates/footer.php"); ?>