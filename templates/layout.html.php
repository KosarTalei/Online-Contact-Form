<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#">About SW</a></li>
                <li class="menu__item"><a class="menu__link" href="/DeliverableC/registration.php">Contact Us</a></li>
                <li class="menu__item"><a class="menu__link" href="#">View Products</a></li>
            </ul>

            <div class="menu-desktop__login"><a class="menu__link" href="#">
                    <span><i class="fa-solid fa-lock"></i></span>Login</a>
            </div>

            <div class="header-shopcart__items">
                <a class="header-shopcart__item header-shopcart__items__view" href="#">
                    <span><i class="fa-solid fa-cart-shopping"></i></span>View Cart</a>
                <a class="header-shopcart__item header-shopcart__items__cart-items-count">0 items</a>
            </div>
        </div>
        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#">
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
    <div class="site-wrapper">

        <main>
            <div class="sw-container">
                <h1 class="sr-only">SW Sports Warehouse</h1>
                <div class="logo-frame">
                    <img src="/DeliverableC/images/sports-warehouse-logo.svg" alt="Sports Warehouse Logo">
                </div>
                <form class="search" action="/DeliverableC/search.php" method="get"><!--action="#">-->
                    <label id="searchLabel" for="search" class="visually-hidden">search products here:</label>
                    <input class="search__products longeLable" name="search" id="search" aria-labelledby="searchLabel" type="text" name="productName" id="productName" placeholder="Search Products" value="">
                    <button class="search__toggle" name="submitButton" value="Search" aria-label="Show/hide search results">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
  
            <?= $output_category ?>

            <div class="slideshow-container">
                <div class="slideshow">
                    <img src="/DeliverableC/images/image-ball.png" alt="sports balls" width="849" height="300">
                    <!-- /DeliverableC/images/image-ball.png -->
                </div>
                <div class="slideshow__overlay">
                    <h2 class="slideshow-view">View our brand <span> new range of</span></h2>
                    <h3 class="slideshow-view__item">Sports <span>balls</span></h3>
                    <a class="slideshow__overlay__shopnow" href="#">Shop now</a>
                </div>
                <div class="bullets">
                    <a class="bullet" aria-label="#slide1"><i class="fa-regular fa-circle"></i></a>
                    <a class="bullet" aria-label="#slide2"><i class="fa-regular fa-circle"></i></a>
                    <a class="bullet" aria-label="#slide3"><i class="fa-regular fa-circle"></i></a>
                </div>
            </div>

            <div class="products-container container">
                <div class="container-line">
                    <h2 class="products-line">Featured products</h2>
                </div>
                <?= $output_products ?>

            </div>

            <aside>
                <div class="container-line container line">
                    <h2 class="brands-line">Our brands and partnerships</h2>
                </div>
                <div class="brands-container">
                    <div class="description">
                        <p class="brands-description">These are some of our top brands and partenships.</p>
                        <b class="special">The best of the best is here.</b>
                    </div>
                    <div class="brands">
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_nike.png" class="item__photo" width="70" height="24" alt="Photo of Nike logo">
                        </div>
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_adidas.png" class="item__photo" width="70" height="46" alt="Photo of Adidas logo">
                        </div>
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_skins.png" class="item__photo" width="70" height="16" alt="Photo of Skins logo">
                        </div>
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_asics.png" class="item__photo" width="70" height="23" alt="Photo of Asics logo">
                        </div>
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_newbalance.png" class="item__photo" width="70" height="37" alt="Photo of New Balance logo">
                        </div>
                        <div class="brand__photo-frame">
                            <img src="/DeliverableC/images/logo_wilson.png" class="item__photo" width="70" height="16" alt="Photo of Wilson logo">
                        </div>
                    </div>
                </div>
            </aside>
        </main>
    </div>
    <aside class="more-info">
        <section class="site-nav">
            <h2>Site navigation</h2>
            <ul class="site-nav__items">
                <li class="site-nav__item"><a class="home__link" href="#">Home</a></li>
                <li class="site-nav__item"><a class="aboutSW__link" href="#">About SW</a></li>
                <li class="site-nav__item"><a class="contactUs__link" href="/DeliverableC/registration.php">Contact Us</a></li>
                <li class="site-nav__item"><a class="viewProducts__link" href="#">View Products</a></li>
                <li class="site-nav__item"><a class="privacy__link" href="#">Privacy Policy</a></li>
            </ul>
        </section>

        <?= $output_category_footer ?>

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
    </footer>

</body>

</html>