<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Register</title>
	<link rel="stylesheet" href="view/style.css">
</head>
<body>
	<header>
		<h1>Login dan Register PHP native</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>

				<?php if (!isset($_SESSION["user"]) ) { ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				<?php } else {?>
					<li><a href="logout.php">Logout</a></li>
				<?php } ?>




				</ul>
			</nav>
		</header>


