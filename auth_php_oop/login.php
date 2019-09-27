<?php 
require_once("core/init.php");

if (Session::cek_session('login')) {
	echo Session::flash("login");
}

// Cek Session
if ($user->is_login() ) {
	Redirect::to("profile");
}

$erros = array();
$errorBiasa= "";
if ( Input::get('submit') )  {
	if (Token::check(Input::get("token")) ) {
		// Memangil Objek validation
	$validation = new Validation();

		// Metdhod Cek
	$validation = $validation->check( array(
		'username' =>[
			'required' => true,
			'min'         => 3,
			'max'        => 8,
		],
		'password' =>[

		]
	));

		// Cek apakah method cek bernilai true atau false
	if ($validation -> passed() ) {
		if ($user->cek_nama(Input::get('username') )) {
			if ($user->login_user( Input::get('username'),	Input::get('password') )) {
				Session::set("username", Input::get("username"));
				Redirect::to("profile");
			}  else {
				$errorBiasa = "Ada masalah saat login";
			}
		} else $errorBiasa = "Username tidak dikenali";

	}	else $erros =  $validation->error();

	}
}


require_once("templates/header.php");
?>
<h5>Login</h5>
<form action="login.php"  method="post">
	
	<label for="username">Username</label><br>
	<input type="text" name="username" id="username">
	<br><br>
	<label for="password">Password</label><br>
	<input type="password" name="password" id="password">
	<input type="hidden" name=" token" value="<?= Token::generate();?>">


	<br>
	<input type="submit" name="submit">

</form>

<?php if (!empty($erros)): ?>
	<div class="error">
		<?php foreach ($erros as $error ) :?>
			<li><?php echo $error; ?></li>
			<?php endForeach;?>
		</div>
	<?php endif ?>

	<!-- Error Biasa -->
	<?php if (!empty($errorBiasa)): ?>
		<div class="error">
			<li><?php echo $errorBiasa; ?></li>
		</div>
	<?php endif ?>


	<?php 
	require_once("templates/footer.php");
	?>