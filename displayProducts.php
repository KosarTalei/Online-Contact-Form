<?php
require_once "classes/DBAccess.php";

include "settings/db.php";

//create database object
$db = new DBAccess($dsn, $username, $password);

//connect to database
$pdo = $db->connect();

//start buffer
ob_start();

//set up query to execute products
$sql = "SELECT photo, price, salePrice, itemName, itemId FROM `item`";
$stmt = $pdo->prepare($sql);

//execute SQL query
$rows = $db->executeSQL($stmt);
//print_r($rows);

//display products
include "templates/products.html.php";
$output_products= ob_get_clean();
//include "./templates/layout.html.php";
//$pdo = null;