<?php
require_once "./classes/DBAccess.php";
require_once "./classes/product.php";
require_once "./classes/ShoppingCart.php";
include "settings/db.php";

if (!isset($_SESSION)) {
	session_start();
}

$pageHeading = "Products";

//create a product object
$product = new Product();

$message = "";

//retrieve all products so they can be listed
$productRows = $product->getProducts();

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
    $sql = "select photo, price, salePrice, itemName, itemId, description from item where itemId = $id";
    $stmt = $pdo->prepare($sql);
    //$stmt->bindValue(":id", $_GET["id"]);
    $rows = $db->executeSQL($stmt);

    $productRows = $product->getProduct($id );// to buy

    //display products
    include "./templates/item.html.php";
}
//display products
//include "templates/shoppingCart/displayProducts.html.php";

//display shopping cart
//include "templates/shoppingCart/displayShoppingCart.html.php";

$output_products = ob_get_clean();
//include "templates/shoppingCart/layout.html.php";
require_once "./displayCategory.php";
require_once "./displayCategory-footer.php";
include "./templates/layout.html.php";