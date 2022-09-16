<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Company Name</h1>
        <nav>
            <ul>
                <li><a href="page1.html">Page 1</a></li>
                <li><a href="page2.html">Page 2</a></li>
                <li><a href="page3.html">Page 3</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <?= $output ?>
    </section>
    <footer>
        <p>&copy; <?= date("Y") ?></p>
    </footer>

</body>
</html>