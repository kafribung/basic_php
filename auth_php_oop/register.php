<?php 
require_once("core/init.php");
// Cek Session
if (Session::cek_session("username") ) {
	Redirect::to("profile");
}

	$erros = array();
	
     if ( Input::get('submit') )  {
     	if (Token::check(Input::get("token"))) {
     		
     	

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
							   'required' => true,
							   'min'         => 3,
							],
		'confirm_pass' => [
									'required' =>  true,
									'match' => 'password',
								]
		));

		// Cek apakah method cek bernilai true atau false
		if (($user->cek_nama(Input::get('username') ))) {
				$erros = ["Nama sudah ada"];
		} else {
		
			if ($validation -> passed() ) {
     				$user->register_user(array(
     					 'username' => Input::get('username'),
     	   	  			'password' => password_hash(Input::get('password'),  PASSWORD_DEFAULT) 
     				) );
     				Session::set("username", Input::get("username"));
     				Session::flash("profile", "Selamat! anda berhasil login");
     				Redirect::to("profile");

     	
			}	else $erros =  $validation->error();
		}

		}
		
	}

 
require_once("templates/header.php");
 ?>
<h5>Daftar disini</h5>
<form action="register.php"  method="post">
	<label for="username">Username</label><br>
	<input type="text" name="username" id="username" autocomplete="off">
	<br><br>
	<label for="password">Password</label><br>
	<input type="password" name="password" id="password">
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

 <?php 
require_once("templates/footer.php");
  ?>