<?php

require_once "./classes/DBAccess.php";
include "./settings/db.php";

$title = "Product Search";
$pageHeading = "Products";
//start buffer
ob_start();

//display the search form
//include "templates/searchForm.html.php";

//check if the search button has been pressed
if (isset($_GET["submitButton"]) && isset($_GET["search"])) {
    $search = $_GET["search"];

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();

    //set up query to execute
    $sql = "select photo, price, salePrice, itemName, itemId FROM `item` where itemName like :itemName";
    //= :productName"
    $stmt = $pdo->prepare($sql);
    //$stmt->bindValue(":itemName", "%$search%");//"$search
    $stmt->bindValue(":itemName", "%$search%");

    //execute SQL query
    $rows = $db->executeSQL($stmt);

    //display products
    include "./templates/products.html.php";
}
$output_products = ob_get_clean();
require_once "./displayCategory.php";
require_once "./displayCategory-footer.php";
include "./templates/layout.html.php";
