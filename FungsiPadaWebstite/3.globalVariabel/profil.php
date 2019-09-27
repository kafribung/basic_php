<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_GET["nama"]; ?></title>
</head>
<body>
	<h3>DIbuat oleh : </h3>
	<strong><?php echo $_GET["nama"]; ?></strong>
	<br>
	<em>Nama Cookie = <?php echo $_COOKIE["user_name"]; ?></em>
	<br><br>
	<b>
		Nama Session = <?php if ( isset($_SESSION["user_name"]) ) {
							echo $_SESSION["user_name"];
						}; 
						?>
	</b>

	
	<?php
		if ( isset($_GET["password"]) ) {
			 echo "Password =" .$_GET["password"];
		}
	 ?>

	 <!-- Session Off -->
	 <a href="logout.php">Logout</a>
</body>
</html>