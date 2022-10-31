<?php
    require_once "classes/DBAccess.php";
    $title = "Test data";
    $pageHeading = "Testing";
    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = "";
//get database settings
include "settings/db.php";
//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();
//set up query to execute
$sql = "select categoryName from Categories";
$stmt = $pdo->prepare($sql);
//execute SQL query
$rows = $db->executeSQL($stmt);
//start buffer
ob_start();
//display results
include "templates/test.html.php";
$output = ob_get_clean();
include "templates/layout.html.php";
