<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP MVC</title>
	<link rel="stylesheet" href=" <?php echo $GLOBALS['path'] ;?>css/style.css ">
</head>
<body>
	<h4>Nama nama user</h4>
	<?php foreach ($data['user'] as $user): ?>
		<p><?= $user['username'] ?></p>
	<?php endforeach ?>
</body>
</html>
