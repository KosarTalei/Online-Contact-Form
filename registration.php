<?php
$title = "Registration form";

//start buffer
ob_start();

include "templates/registrationForm.html.php";


$output = ob_get_clean();

include "templates/layout.html.php";

?>