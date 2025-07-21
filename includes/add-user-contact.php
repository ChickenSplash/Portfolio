<?php

require BASE_PATH . "includes/envloader.php";
require BASE_PATH . "includes/database-config.php";

foreach ($_POST as $key => $value) { // takes all the imputs and trims the values
    $_POST[$key] = trim($value);
}

$errors = []; // then check all the inputs if they are valid

if (!$_POST["forename"]) {
    $errors["name"] = "Name required";
}

if (!$_POST["email"]) {
    $errors["email"] = "Email required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Invalid email format.";
}

if (strlen($_POST["message"]) < 5) {
    $errors["message"] = "Message must contain atleast 5 characters.";
}

if (!$errors) {
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        
        //dynamically build the sql statement
        $columns = implode(", ", array_keys($_POST));
        $placeholders = ":" . implode(", :", array_keys($_POST));
        $statement = $pdo->prepare("INSERT INTO user_contact ($columns) VALUES ($placeholders)");
        
        //passing in the POST array allows it to bind array keys with placeholders
        $statement->execute($_POST);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }    
} else {
    // should validation fail, keep those two around for user feedback and to persist the user input values.
    $_SESSION["form_errors"] = $errors;
    $_SESSION["old_input"] = $_POST;
}

header("Location: /#contact-me"); // tell the browser to reload the page as GET using that path location
exit(); // Important to stop script execution after the redirect