<?php
$title = "Thank you";
//start buffer
ob_start();
//display thanks file
require_once "./templates/contactForm/confirmation.html.php";
$output_confirm = ob_get_clean();
include "./templates/contactForm/layout.html.php";
$pdo = null;
?>