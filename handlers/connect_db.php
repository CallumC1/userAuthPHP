<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phpuserauth');

function connect_to_database() {

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        // Log the error instead of displaying it to the user to prevent credential leaks.
        error_log("Connection failed: " . $conn->connect_error);
        die("Internal server error. Please try again later.");
    }

    return $conn;
};
