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
    <div class="site-wrapper">

        <div class="company full-center">
            <h1 aria-label="Company Name">
                <?php echo ' <img src="http://localhost/start/imgs/LogoLarge.gif" /> '; ?>  
            </h1>
        </div>

        <div class="about-section full-center">
            <div class="about-us">
                <h2>Sports warehouse is coming soon.</h2>
                <p> If you have any questions,
                    we would love to hear from you, please complete the following information. </p>
            </div>
        </div>
        <section>
            <?=
            $output
            ?>
        </section>
    </div>
</body>

</html>