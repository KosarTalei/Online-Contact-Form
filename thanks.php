<?php
$title = "Thank you";
//start buffer
ob_start();
//display thanks file
include "./templates/contactForm/confirmation.html.php";
$output = ob_get_clean();
include "./templates/contactForm/layout.html.php";
?>