<?php
require_once "classes/DBAccess.php";
$title = "Insert";
//$pageHeading = "Products";
//get database settings
include "settings/db.php";

//create database object
$db = new DBAccess($dsn, $username, $password);

//connect to database
$pdo = $db->connect();

//get categories to poulate drop down list
$sql = "select categoryId, categoryName from category";
$stmt = $pdo->prepare($sql);
//execute SQL query
$categoryRows = $db->executeSQL($stmt);

$message = "";
$error = false;
//insert product when the button is clicked
if (isset($_POST["submit"])) {
    //check a product name was supplied
    //check details were supplied
    //if (isset($_POST["itemName"]) && isset($_POST["price"]) && isset($_POST["categoryName"])) {

    //check a product name was supplied
    if (!empty($_POST["itemName"])) {
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
                $message = "The file $photo has been uploaded.";
            } else {
                $message = "Sorry, there was an error uploading your file. Error Code:" .
                    $_FILES["photo"]["error"];
                $photo = "";
            }
        } else {
            $photo = "";
        }

        //set up query to execute
        //insert product
        $sql = "insert into item(itemName, categoryId, featured, price, salePrice, description, photo)
        values(:itemName, :categoryId, :featured, :price, :salePrice, :description, :photo)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":itemName", $_POST["itemName"], PDO::PARAM_STR);
        $stmt->bindValue(":categoryId" , $_POST["category"], PDO::PARAM_INT);
        $stmt->bindValue(":featured", $_POST["featured"], PDO::PARAM_STR);
        $stmt->bindValue(":price", $_POST["price"], PDO::PARAM_STR);
        $stmt->bindValue(":salePrice", $_POST["salePrice"], PDO::PARAM_INT);
        $stmt->bindValue(":description", $_POST["description"], PDO::PARAM_INT);
        $stmt->bindValue(":photo", $photo, PDO::PARAM_STR);
        //execute SQL query
        $id = $db->executeNonQuery($stmt, true);
        $message = "The item was added, id: " . $id;
    }
}
//start buffer
ob_start();
//display form
include "templates/Authentication/productForm.html.php";
//include "protectPageExample.php";
$output = ob_get_clean();
include "templates/Authentication/updateLayout.html.php";
