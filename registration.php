<?php
$title = "Contact form";

//start buffer
ob_start();

if (isset($_POST["submitButton"])) {

    //check for missing fields
    $requiredFields = ["firstName" => "First name", "lastName" => "Last name", "Emailaddress" =>
    "Email"];
    $missingFields = [];
    foreach ($requiredFields as $field => $description) {
        if (!isset($_POST[$field]) || !$_POST[$field]) {
            //if the field is missing add it to the $missingFields array
            $missingFields[$field] = $description;
        }
    }


    //not empty fields -> check for un valid inputs
    $requiredFields = ["firstName", "lastName", "Contactnumber", "Emailaddress"];
    $unValidFields = [];

    $name = valid_name($_POST["firstName"]);
    $lastname = valid_lastName($_POST["lastName"]);
    $phone = valid_phone($_POST["Contactnumber"]);
    $email = valid_email($_POST["Emailaddress"]);

    $problem = 0;
    if ($name === false || $lastname === false || $phone === false || $email === false) {
        //if the field is missing add it to the $missingFields array
        $problem = $problem + 1;
    }


    //display missing fields
    if ($missingFields) {
        //include missing fields file
        include "./templates/contactForm/displayMissingFields.html.php";
        include "./templates/contactForm/registrationForm.html.php";
    } elseif ($problem > 0) {//display un valid fields
        //display process contact
        include "./processContact.php";
        include "./templates/contactForm/registrationForm.html.php";
    } else {
        //redirect to thanks.php
        header("Location: thanks.php");
        ob_get_clean();
        exit();
    }
} else {
    //first time page is loaded display the form;
    include "./templates/contactForm/registrationForm.html.php";
}

function setValue($fieldName){
    if (isset($_POST[$fieldName])) {
        return htmlspecialchars($_POST[$fieldName]);
    }
}

function valid_name($firstName)
{
    $tmp = $firstName;

    if (preg_match("/^[a-zA-Z-' ]*$/", $tmp)) {
        return true;
    }
    return false;
}

function valid_lastName($lastName)
{
    $tmp = $lastName;

    if (preg_match("/^[a-zA-Z-' ]*$/", $tmp)) {
        $lastName = $tmp;
        return true;
    }
    return false;
}

function valid_phone($Contactnumber)
{
    $phone = $Contactnumber;
    if (!empty($phone)) {

        $valid_phone_number = preg_replace('~^()|\D~', '\1', $phone);
        if (preg_match('/^[0-9]{11}+$/', "$valid_phone_number")) {
            return true;
        } 
        return false;
    }
    return true;
}

function valid_email($Emailaddress)
{
    $email = $Emailaddress;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } 
    return false;
}


$output_confirm = ob_get_clean();

include "./templates/contactForm/layout.html.php";
