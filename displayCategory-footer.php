<?php
require_once "classes/DBAccess.php";

include "settings/db.php";

//create database object
$db = new DBAccess($dsn, $username, $password);

//connect to database
$pdo = $db->connect();

//start buffer
ob_start();

//set up query to execute categories
$sql = "SELECT categoryName FROM `category`";
$stmt = $pdo->prepare($sql);

//execute SQL query
$rows_category = $db->executeSQL($stmt);
//print_r($rows);

//display
include "templates/category-footer.html.php";
$output_category_footer = ob_get_clean();