<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login & Register PHP</title>
	<link rel="stylesheet" href="asset/style.css">
</head>
<body>
	<header>
		<h2>Belajar Konsep CRUD OOP PHP</h2>
		<nav>
			<?php if (!Session::cek_session("username") ) : ?>  
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			<?php else : ?>
				<a href="logout.php">Logout</a>
			<?php endif; ?>
			<a href="profile.php">Profile</a>
			
		</nav>
	</header>

