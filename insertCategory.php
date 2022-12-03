<?php
require_once "classes/DBAccess.php";
$title = "Insert";
//$pageHeading = "Categories";
//get database settings
include "settings/db.php";
//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();
$message = "";
//insert catehory when the button is clicked
if (isset($_POST["submit"])) {
    //check a category name was supplied
    if (!empty($_POST["categoryName"])) {
        //set up query to execute
        $sql = "insert into category (categoryName) values(:categoryName)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":categoryName", $_POST["categoryName"], PDO::PARAM_STR);
        //execute SQL query
        $id = $db->executeNonQuery($stmt, true);
        $message = "The category was added, id: " . $id;
    }
}
//start buffer
ob_start();

//display form
include "templates/Authentication/insertCategoryForm.html.php";

$output = ob_get_clean();

include "templates/Authentication/updateLayout.html.php";
