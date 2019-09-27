<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
</head>
<body>
	<h2>Menghancurkan session</h2>
	<?php 
		session_start();

		// menghilangkan cookie
		setcookie("user_name", $_POST["nama"], time()-180);

		// Menghilangkan session
		// session_unset($_SESSION["user_name"]);
		session_destroy();
	 ?>
</body>
</html>