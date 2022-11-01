<?php
require_once "./classes/DBAccess.php";

$title = "View Item";
$dsn = "mysql:host=localhost;dbname=sportswh;charset=utf8";
$username = "root";
$password = "";

//create database object
$db = new DBAccess($dsn, $username, $password);

//connect to database
$pdo = $db->connect();

//start buffer
ob_start();

//check if there is a query string field named id
if (isset($_GET["itemId"])) {
    //retrieve products
    $id = $_GET["itemId"];
    $sql = "select photo, price, salePrice, itemName, description from item where itemId = $id";
    $stmt = $pdo->prepare($sql);
    //$stmt->bindValue(":id", $_GET["id"]);
    $rows = $db->executeSQL($stmt);

    //display products
    include "./templates/item.html.php";
}
$output_products = ob_get_clean();
require_once "./displayCategory.php";
require_once "./displayCategory-footer.php";
include "./templates/layout.html.php";
//$pdo = null;
