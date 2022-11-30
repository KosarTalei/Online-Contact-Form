<?php
	require_once "classes/Authentication.php";

	if(!isset($_SESSION))
	{
		session_start();
	}

	$title = "Another Protected Page";
	$pageHeading = "Another protected page";

	//the authentication class is static so there is no need to create an instance of the class

	$message = "";

	//start buffer
	ob_start();

	//display admin content
	include "templates/adminSection.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php";

?>