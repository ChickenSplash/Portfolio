<?php

session_start();

// allows php to display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_PATH =  __DIR__ . "/";

require BASE_PATH . "includes/functions.php";

if ($_SERVER["REQUEST_URI"] === "/") {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require BASE_PATH . "includes/add-user-contact.php";
    }

    // retain values from previous session for user feedback
    $status = $_SESSION["form_status"] ?? [];
    $old_input = $_SESSION["old_input"] ?? [];
    unset($_SESSION['form_status'], $_SESSION['old_input']);

    $headTitle = "Emanuel's Portfolio";
    require BASE_PATH . "pages/index.php";
} elseif ($_SERVER["REQUEST_URI"] === "/coding-examples") {
    $headTitle = "Coding Examples";
    require BASE_PATH . "pages/coding-examples.php";
} elseif ($_SERVER["REQUEST_URI"] === "/scs-scheme") {
    $headTitle = "Scion Coalition Scheme";
    require BASE_PATH . "pages/scs-scheme.php";
} else {
    require BASE_PATH . "pages/404.php";
}