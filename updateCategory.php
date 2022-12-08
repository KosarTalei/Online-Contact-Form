<?php
//require_once "classes/Authentication.php";
require_once "classes/DBAccess.php";

$title = "Protected Page";
//$pageHeading = "Update Categories";

//get database settings
include "settings/db.php";
//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();


$message = "";
//Authentication::protect();

//update the category when the button is clicked
if (isset($_POST["submit"])) {
    //check a category name and id was supplied
    if (!empty($_POST["categoryName"]) && !empty($_POST["categoryId"])) {
        //set up query to execute
        $sql = "update category set categoryName=:categoryName where categoryId = :categoryId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":categoryName", $_POST["categoryName"], PDO::PARAM_STR);
        $stmt->bindValue(":categoryId", $_POST["categoryId"], PDO::PARAM_INT);
        //execute SQL query
        $db->executeNonQuery($stmt, false);
        $message = "The category was updated";
    }
}

//display the category to be updated
//get the category id from the query string or from the posted data if the submit button was pressed
if (isset($_GET["id"])) {
    $catId = $_GET["id"];
} elseif (isset($_POST["categoryId"])) {
    $catId = $_POST["categoryId"];
} else {
    $catId = 0;
}
$sql = "select categoryId, categoryName from category where categoryID =:categoryId";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":categoryId", $catId, PDO::PARAM_INT);
$rows = $db->executeSQL($stmt);

//select all categories to display in a table
$sql = "select categoryId, categoryName from category";
$stmt = $pdo->prepare($sql);
$categoryRows = $db->executeSQL($stmt);

//start buffer 
ob_start();

//display categories
include "templates/Authentication/displayCategories.html.php";

//display form
include "templates/Authentication/updateCategoryForm.html.php";

$output = ob_get_clean();

include "templates/Authentication/updateLayout.html.php";