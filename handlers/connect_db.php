<?php
function connect_to_database() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "phpuserauth";

    $conn = new mysqli($hostname, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Return database connection.
    return $conn;
};
