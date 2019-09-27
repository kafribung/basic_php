<?php 
require_once("core/init.php");

// Cek Session
if (!$user->is_login()  ) {
	// Session::flash('login', 'Anda harus login terlebih dahulu');
	Session::flash("login", "Anda harus login terlebih dahulu");
	Redirect::to("login");
}
$sesion = Session::get("username");
$data_user = $user-> get_data($sesion);

if ( Input::get('submit') )  {
	if (Token::check(Input::get("token"))) {

		// Memangil Objek validation
		$validation = new Validation();
		
		// Metdhod Cek
		$validation = $validation->check( array(
			'password' =>[
				'required' => true,
				'min'         => 3,
			],

			'password_baru' => [
				'required '=> true,
				'min'         => 3,
			],
			'confirm_pass' => [
				'required' =>  true,
				'match' => 'password_baru',
			]
		));

		// Cek apakah method cek bernilai true atau false
		if ($validation -> passed() ) {
			if (password_verify(Input::get("password"), $data_user["password"] )) {

				$user->update_password(array(
					'password' => password_hash(Input::get('password_baru'),  PASSWORD_DEFAULT) 
				),  $data_user["id"]);
				Session::flash("profile", "Selamat! anda berhasil login");
     			Redirect::to("profile");

			} else $error= ["Password salah"];
		}	else $erros =  $validation->error();
		

	}

}


require_once("templates/header.php");
?>

<h5>Ganti Password</h5>
<form action="" method="post">
	<label for="password">Password</label><br>
	<input type="password" name="password" id="password">
	<br><br>

	<label for="password_baru">Password Baru</label><br>
	<input type="password" name="password_baru" id="password_baru">
	<br><br>

	<label for="confirm_pass">Ulangi Password</label><br>
	<input type="password" name="confirm_pass" id="confirm_pass">
	<input type="hidden" name=" token" value="<?= Token::generate();?>">

	<br>
	<input type="submit" name="submit">
	<?php if (!empty($erros)): ?>
		<div class="error">
			<?php foreach ($erros as $error ) :?>
				<li><?php echo $error; ?></li>
				<?php endForeach;?>
			</div>
		<?php endif ?>
	</form>




	<?php  require_once("templates/footer.php"); ?>