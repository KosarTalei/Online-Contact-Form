<?php
require_once "classes/DBAccess.php";
$title = "Delete";
$pageHeading = "Items";

//get database settings
include "settings/db.php";

//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();
$message = "";

//get item id to delete
if (!empty($_GET["id"]) && !empty($_GET["photo"])) {
    //set up query to execute
    $sql = "delete from item where itemId=:itemId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":itemId", $_GET["id"], PDO::PARAM_INT);

    //execute SQL query
    $affectedRows = $db->executeNonQuery($stmt, false);
    if ($affectedRows === -1) {
        $message = "The item cannot be deleted because there are products associated with this item";
    } else {
        $message = "The item was deleted";
    }

    //delete the file if the photo is not set to none
    if ($_GET["photo"] != "none") {
        $file = "images/" . $_GET["photo"];
        if (!unlink($file)) {
            $message = "Error deleting $file";
        } else {
            $message = "The item and photo was deleted";
        }
    }
}
//select all categories to display in a table
$sql = "select itemId, itemName, categoryId, featured, price, salePrice, description, photo from item";
$stmt = $pdo->prepare($sql);
$itemRows = $db->executeSQL($stmt);
//start buffer
ob_start();
//display categories
include "templates/Authentication/displayItems.html.php";
$output = ob_get_clean();
include "templates/Authentication/updateLayout.html.php";
