<?php
require_once "./classes/DBAccess.php";

$title = "Products by category";
$dsn = "mysql:host=localhost;dbname=sportswh;charset=utf8";
$username = "root";
$password = "";

//create database object
$db = new DBAccess($dsn, $username, $password);

//connect to database
$pdo = $db->connect();

//set up query to execute
$sql = "select categoryName, categoryId from Category";
$stmt = $pdo->prepare($sql);

//execute SQL query
$rows = $db->executeSQL($stmt);

//start buffer
ob_start();

//check if there is a query string field named id
if (isset($_GET["id"])) {
    //retrieve category name
    $sql = "select categoryName from category where categoryId = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);
    $categoryName = $db->executeSQLReturnOneValue($stmt);

    //retrieve products
    $sql = "select photo, price, salePrice, itemName, itemId from item where categoryId = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);
    $rows = $db->executeSQL($stmt);

    //display products
    include "./templates/products.html.php";
}
$output_products = ob_get_clean();
require_once "./displayCategory.php";
require_once "./displayCategory-footer.php";
include "./templates/layout.html.php";
//$pdo = null;
