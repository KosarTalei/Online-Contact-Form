<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
	<nav>
		<ul>
			<li><a href="createUser.php">Create user</a></li>
			<li><a href="protectPageExample.php">Admin section</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
		<h1><?= $pageHeading ?></h1>
		<?= $output ?>	
	</div>
</body>
</html>