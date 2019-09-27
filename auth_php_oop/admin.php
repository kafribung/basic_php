<?php 
require_once("core/init.php");

// Cek Session
if (!$user->is_login()  ) {
	// Session::flash('login', 'Anda harus login terlebih dahulu');
	Session::flash("login", "Anda harus login terlebih dahulu");
	Redirect::to("login");

}

$sesion = Session::get("username");


$dataUser = $user-> get_data($sesion);

if (!$user->is_admin(Session::get("username")) ) {
	Session::flash("login", "Sebagai Admin");
	Redirect::to("login");
}
$users = $user->get_user();

require_once("templates/header.php");
?>

<h3>Hai  Admin</h3>
<?php foreach ($users as $_user) :?>
	<li> 
		<a href=" profile.php?nama=<?= $_user["username"]; ?> ">  <?php echo $_user["username"]; ?> </a>
	 </li>
<?php endforeach; ?>





<?php  require_once("templates/footer.php"); ?>