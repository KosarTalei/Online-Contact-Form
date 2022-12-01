<?php
require_once "classes/DBAccess.php";
$title = "Delete";
//$pageHeading = "Categories";
//get database settings
include "settings/db.php";
//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();
$message = "";
//get category id to delete
if(!empty($_GET["id"]))
{
//set up query to execute
$sql = "delete from category where categoryID=:categoryID";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":categoryID" , $_GET["id"], PDO::PARAM_INT);
//execute SQL query
$db->executeNonQuery($stmt, false);
$message = "The category was deleted";
}
//select all categories to display in a table
$sql = "select categoryId, categoryName from category";
$stmt = $pdo->prepare($sql);
$categoryRows = $db->executeSQL($stmt);
//start buffer
ob_start();
//display categories
include "templates/Authentication/deleteCategoryForm.html.php";
$output = ob_get_clean();
include "templates/Authentication/updateLayout.html.php";
?>