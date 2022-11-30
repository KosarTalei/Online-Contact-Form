<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styleShoppingCart.css">
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
				<li class="menu__item"><a class="menu__link" href="#">View Products</a></li>
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
		<h1><?= $pageHeading ?></h1>
		<div id="content">
			<?= $output ?>
		</div>
	</div>

	<!--<div class="site-wrapper">

		<aside class="more-info">
			<section class="site-nav">
				<h2>Site navigation</h2>
				<ul class="site-nav__items">
					<li class="site-nav__item"><a class="home__link" href="display.php">Home</a></li>
					<li class="site-nav__item"><a class="aboutSW__link" href="#">About SW</a></li>
					<li class="site-nav__item"><a class="contactUs__link" href="/DeliverableC/registration.php">Contact Us</a></li>
					<li class="site-nav__item"><a class="viewProducts__link" href="#">View Products</a></li>
					<li class="site-nav__item"><a class="privacy__link" href="#">Privacy Policy</a></li>
				</ul>
			</section>

			<!?= $output_category_footer ?>

			<section class="contact-us">
				<h2>Contact Sports Warehouse</h2>
				<ul class="contact-us__options">
					<li class="contact-us__option">
						<div class="circle"><i class="fa-brands fa-facebook-f fa-2xl"></i></div>
						<a class="facebook__link" href="#">Facebook</a>
					</li>
					<li class="contact-us__option">
						<div class="circle"><i class="fa-brands fa-twitter fa-2xl"></i></div>
						<a class="twitter__link" href="#">Twitter</a>
					</li>
					<li class="contact-us__option">
						<div class="circle"><i class="fa fa-paper-plane fa-2xl" aria-hidden="true"></i></div>
						<a class="other__link" href="#">Other</a>
						<ul class="other-infos">
							<li class="other-infos__item"><a href="/DeliverableC/registration.php">Online form</a></li>
							<li class="other-infos__item"><a href="#">Email</a></li>
							<li class="other-infos__item"><a href="#">Phone</a></li>
							<li class="other-infos__item"><a href="#">Address</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</aside>
		<footer class="site-footer">
			<p>© Copyright 2020 Sports Warehouse.</p>
			<p>All rights reserved.</p>
			<p>Made by Awesomwsause Design.</p>
		</footer>-->
</body>

</html>