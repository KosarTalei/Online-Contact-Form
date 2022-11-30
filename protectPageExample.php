<?php
	require_once "classes/Authentication.php";

	if(!isset($_SESSION))
	{
		session_start();
	}

	$title = "Protected Page";
	$pageHeading = "This is for logged in users only";

	//the authentication class is static so there is no need to create an instance of the class

	$message = "";

	Authentication::protect();

	//start buffer
	ob_start();

	//display admin content
	include "templates/Authentication/adminSection.html.php";

	$output = ob_get_clean();

	include "templates/Authentication/layout.html.php";

?>