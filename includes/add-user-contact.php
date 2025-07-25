<?php

foreach ($_POST as $key => $value) { // takes all the inputs and cleanses and trims them
    $_POST[$key] = trim(strip_tags($value));
}

$status = []; // then check all the inputs if they are valid

if (!$_POST["forename"]) {
    $status["name"] = "Foreame required.";
} elseif (strlen($_POST["forename"]) > 50) {
    $status["name"] = "Forename must contain fewer than 50 characters.";
}

if (strlen($_POST["surname"]) > 50) {
    $status["surname"] = "Surname must contain fewer than 50 characters.";
}

if (!$_POST["email"]) {
    $status["email"] = "Email required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $status["email"] = "Invalid email format.";
} elseif (strlen($_POST["email"]) > 128) {
    $status["email"] = "Email must contain fewer than 128 characters.";
}

if (strlen($_POST["subject"]) > 128) {
    $status["subject"] = "Subject must contain fewer than 128 characters.";
}

if (strlen($_POST["message"]) < 5) {
    $status["message"] = "Message must contain atleast 5 characters.";
}

if (!$status) { // has it passed all validation? load up all required stuff and add to database and send it
    try {
        require BASE_PATH . "includes/envloader.php"; // required as following two requires in this block uses variables from this
        require BASE_PATH . "includes/database-config.php"; // provides connection info for database and mailer
        
        $pdo = new PDO($dsn, $username, $password, $options);
        
        //dynamically build the sql statement
        $columns = implode(", ", array_keys($_POST));
        $placeholders = ":" . implode(", :", array_keys($_POST));
        $statement = $pdo->prepare("INSERT INTO user_contact ($columns) VALUES ($placeholders)");
        
        //passing in the POST array allows it to bind array keys with placeholders
        $statement->execute($_POST);
        
        $status["sent"] = "Message Sent!";
        require BASE_PATH . "includes/mailsender.php"; // upon sucessful addition to database, load file to then send email to myself
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }    
} else {
    $_SESSION["old_input"] = $_POST; // Should validation fail, save the values to then retain them upon page refresh
}

$_SESSION["form_status"] = $status;

header("Location: /#contact-me"); // tell the browser to reload the page as GET using that path location
exit(); // Important to stop script execution after the redirect