<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="/DeliverableC/styleContactForm.css" rel="stylesheet">
</head>

<body>
    <div class="site-wrapper">

        <div class="company full-center">
            <!--<a class="return" href="/DeliverableC/templates/layout.html.php">> Go Back</a>-->
            <div class="logo-frame">
                <img src="/DeliverableC/images/sports-warehouse-logo.svg" alt="Sports Warehouse Logo">
            </div>
        </div>

        <div class="about-section full-center">
            <div class="about-us">
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