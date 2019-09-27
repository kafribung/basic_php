<?php 
	$login = false;
   if ( isset($_SESSION["user"]) )  {
   	    $login = true;
   }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog - PHP native</title>
	<link rel="stylesheet" href="view/style.css">
</head>
<body>
	<header>
		<h1>Blog Kafri Bung</h1>s
		<nav >
			<a href="index.php">Home</a>
			<?php if ($login == true): ?>
				<a href="create.php">Tambah</a>
				<a href="logout.php">Logout</a>
			<?php else: ?>
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			<?php endif; ?>
			
		</nav>
	</header>
	
