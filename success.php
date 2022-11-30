<?php
require_once "classes/Authentication.php";

if (!isset($_SESSION)) {
	session_start();
}

$title = "Success";
$pageHeading = "Login Successful";
$loginName = $_SESSION["username"];

//start buffer
ob_start();

//display create user form
include "templates/Authentication/success.html.php";

$output = ob_get_clean();

include "templates/Authentication/layout.html.php";
