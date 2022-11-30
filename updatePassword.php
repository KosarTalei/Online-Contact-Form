<?php
	require_once "classes/Authentication.php";

	$title = "Update user";
	$pageHeading = "Update password";

	//the authentication class is static so there is no need to create an instance of the class

	$message = "";

	if(!empty($_POST["username"]) && !empty($_POST["password"])){
		//update user password by username
		$message = Authentication::updateUser($_POST["username"], $_POST["password"]);
	}
	//start buffer
	ob_start();

	//display update user form
	include "templates/Authentication/updatePasswordForm.php";

	$output = ob_get_clean();

	include "templates/Authentication/layout.html.php";
    
