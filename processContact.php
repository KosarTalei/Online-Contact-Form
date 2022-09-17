<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Process Registration</title>
</head>

<body>

    <?php
    $tmp = $_POST["firstName"];
    if (!empty($tmp)) {
        if (preg_match("/^[a-zA-Z-' ]*$/", $tmp)) {
            $firstName = $tmp;
        } else {
            $firstName = "Only letters and white space allowed!";
        }
    } else {
        $firstName = "First name is required";
    }

    $tmp = $_POST["lastName"];
    if (!empty($tmp)) {

        if (preg_match("/^[a-zA-Z-' ]*$/", $tmp)) {
            $lastName = $tmp;
        } else {
            $lastName = "Only letters and white space allowed!";
        }
    } else {
        $lastName = "Last name is required";
    }

    $phone = $_POST["Contactnumber"];
    if (empty($phone)) {
        $Contactnumber = "Not provided";//not required
    } else {
        $valid_phone_number = preg_replace('~^()|\D~', '\1', $phone);
        if(preg_match('/^[0-9]{11}+$/', "$valid_phone_number")) {
            $Contactnumber = $_POST["Contactnumber"];
        } else {
            $Contactnumber = "Enter Phone Number with correct format!";
        }
    }
    

    $email = $_POST["Emailaddress"];
    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $Emailaddress = $email;
        } else {
            $Emailaddress = "Invalid email format!";
        }
    } else {
        $Emailaddress = "Email is required";
    }

    ?>
 
    <dl>
        <dt>First name</dt>
        <dd><?= $firstName?></dd>
        <dt>Last name</dt>
        <dd><?= $lastName?></dd>
        <dt>Contact number</dt>
        <dd><?= $Contactnumber?></dd>
        <dt>Email</dt>
        <dd><?= $Emailaddress?></dd>
        <dt>Try again! </dt>
    </dl>
</body>

</html>