<?php
require_once "classes/DBAccess.php";
$title = "Update";
$pageHeading = "Products";
//get database settings
include "settings/db.php";
//create database object
$db = new DBAccess($dsn, $username, $password);
//connect to database
$pdo = $db->connect();

//get categories to populate drop down list
$sql = "select categoryId, categoryName from category";
$stmt = $pdo->prepare($sql);
//execute SQL query
$categoryRows = $db->executeSQL($stmt);

$message = "";
$error = false;

//update product when the button is clicked
//check a product name was supplied and a product id
if (isset($_POST["submit"]) && !empty($_POST["itemName"]) && !empty($_POST["itemId"])) {

    //save the file
    //specify directory where image will be saved
    $targetDirectory = "images/";
    //get the filename
    $photo = basename($_FILES["photo"]["name"]);
    //set the entire path
    $targetFile = $targetDirectory . $photo;
    //only allow image files
    $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true;
    }
    //check the file size php.ini has an upload_max_filesize, default set to 2M
    //if the file size exceeds the limit the error code is 1
    if ($_FILES["photo"]["error"] == 1) {
        $message = "Sorry, your file is too large. Max of 2M is allowed.";
        $error = true;
    }
    if ($error == false) {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            //delete old photo if there was one
            if (!empty($_POST["oldPhoto"])) {
                $file = "images/" . $_POST["oldPhoto"];
                //delete the file using unlink
                unlink($file);
            }
            //set up query to execute
            //update employee with new photo
            $sql = "update item set photo = :photo where itemId=:itemId";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":itemId", $_POST["itemId"], PDO::PARAM_INT);
            $stmt->bindValue(":photo", $photo, PDO::PARAM_STR);
            //execute SQL query
            $id = $db->executeNonQuery($stmt, false);
        } else {
            $message = "Sorry, there was an error uploading your file. Error Code:" .
                $_FILES["photo"]["error"];
            $photo = "";
        }
    }



    //set up query to execute
    //update product
    $sql = "update item set itemName=:itemName, categoryId = :categoryId, price = :price, salePrice = :salePrice,
    description =:description, featured =:featured where itemId = :itemId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":itemName", $_POST["itemName"], PDO::PARAM_STR);
    $stmt->bindValue(":categoryId", $_POST["category"], PDO::PARAM_INT);
    $stmt->bindValue(":price", $_POST["price"], PDO::PARAM_STR);
    $stmt->bindValue(":salePrice", $_POST["salePrice"], PDO::PARAM_STR);
    $stmt->bindValue(":description", $_POST["description"], PDO::PARAM_INT);
    $stmt->bindValue(":featured", $_POST["featured"], PDO::PARAM_INT);
    $stmt->bindValue(":itemId", $_POST["itemId"], PDO::PARAM_INT);
    //execute SQL query
    $id = $db->executeNonQuery($stmt, false);
    $message = "The item was updated, id " . $_POST["itemId"];
}

//display the product to be updated
//get the product id from the query string or from the posted data if the submit button was pressed
if (isset($_GET["id"])) {
    $prodId = $_GET["id"];
} elseif (isset($_POST["itemId"])) {
    $prodId = $_POST["itemId"];
} else {
    $prodId = 0;
}
$sql = "select * from item where itemId = :itemId";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":itemId", $prodId, PDO::PARAM_INT);
$rows = $db->executeSQL($stmt);

//select all products to display in a table
$sql = "select itemId, itemName, category.categoryName,category.categoryId,
    price, salePrice, featured, description, photo from item, Category where category.categoryId = item.categoryId";
$stmt = $pdo->prepare($sql);
$itemRows = $db->executeSQL($stmt);

//start buffer
ob_start();
//display products
include "templates/Authentication/displayItemsUpdate.html.php";
//display product form
include "templates/Authentication/UpdateproductForm.html.php";
$output = ob_get_clean();
include "templates/Authentication/updateLayout.html.php";
