<?php

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
    
    $headTitle = "Emanuel's Portfolio";
    require BASE_PATH . "pages/index.php";
}

if ($_SERVER["REQUEST_URI"] === "/coding-examples") {
    $headTitle = "Coding Examples";
    require BASE_PATH . "pages/coding-examples.php";
}

if ($_SERVER["REQUEST_URI"] === "/scs-scheme") {
    $headTitle = "Scion Coalition Scheme";
    require BASE_PATH . "pages/scs-scheme.php";
}