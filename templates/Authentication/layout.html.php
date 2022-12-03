<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="authenticationStyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<title>Online Sport Shop🤸‍♀️</title>
	<script src="https://kit.fontawesome.com/149a0b0e8d.js" crossorigin="anonymous"></script>
</head>

<body>

	<header class="header wrapper">
		<!-- Hamburger icon -->
		<input class="side-menu" type="checkbox" id="side-menu">
		<div class="header__links">
			<label class="hamb" for="side-menu"><span class="menu-line" aria-hidden="true">☰</span>
				Menu
			</label>

			<ul class="menu-desktop">
				<li class="menu__item"><a class="menu__link" href="display.php">Home</a></li>
				<li class="menu__item"><a class="menu__link" href="#">About SW</a></li>
				<li class="menu__item"><a class="menu__link" href="/DeliverableC/registration.php">Contact Us</a></li>
				<li class="menu__item"><a class="menu__link" href="#display.php">View Products</a></li>
			</ul>

			<div class="menu-desktop__login"><a class="menu__link" href="login.php">
					<span><i class="fa-solid fa-lock"></i></span>Login</a>
			</div>

			<div class="header-shopcart__items">
				<a class="header-shopcart__item header-shopcart__items__view" href="shopping.php">
					<span><i class="fa-solid fa-cart-shopping"></i></span>View Cart</a>
				<a class="header-shopcart__item header-shopcart__items__cart-items-count">0 items</a>
			</div>
		</div>
		<!-- Menu -->
		<nav class="nav">
			<ul class="menu">
				<li class="menu__item"><a class="menu__link" href="login.php">
						<span><i class="fa-solid fa-lock"></i></span>Login</a></li>
				<li class="menu__item"><a class="menu__link" href="#">
						<span><i class="fa-regular fa-circle"></i></span>Home</a></li>
				<li class="menu__item"><a class="menu__link" href="#">
						<span><i class="fa-regular fa-circle"></i></span>About SW</a></li>
				<li class="menu__item"><a class="menu__link" href="/DeliverableC/registration.php">
						<span><i class="fa-regular fa-circle"></i></span>Contact Us</a></li>
				<li class="menu__item"><a class="menu__link" href="#">
						<span><i class="fa-regular fa-circle"></i></span>View Products</a></li>
			</ul>
		</nav>
	</header>

	<div id="wrapper">
		<nav>
			<ul>
				<li><i class="fa-solid fa-arrow-right"></i><a href="createUser.php">Create user</a></li>
				<li><i class="fa-solid fa-arrow-right"></i><a href="protectPageExample.php">Admin section</a></li>
				<li><i class="fa-solid fa-arrow-right"></i><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<h1><?= $pageHeading ?></h1>
		<?= $output ?>
	</div>
</body>

</html>