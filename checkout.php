<?php
    $title = "Checkout";
    $pageHeading = "Checkout";

    //start buffer
    ob_start();

    //display checkout form
    include "templates/shoppingCart/checkoutForm.html.php";
  
    $output = ob_get_clean();

    include "templates/shoppingCart/layout.html.php";
?>