<?php
session_start();
session_regenerate_id(true);
$formData = [
    'first_name' => $_POST['first_name'],
    'last_name'  => $_POST['last_name'],
    'email'      => $_POST['email'],
];
$_SESSION['signup_form_data'] = $formData;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require("./connect_db.php");
    $conn = connect_to_database();
    
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Check if user email is already in database.
    $sql = "SELECT * FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo("User with this email already exists.");
        header("Location: /userauthphp/pages/signup.php?msg=email-already-exists");
        $check_stmt->close();
        $conn->close();
        exit();
    }

    $check_stmt->close();

    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $password_hash);

        if ($stmt->execute()) {
            // Successfully added the user, now redirect back with a message.
            $stmt->close();
            header("Location: /userauthphp/pages/signup.php?msg=success");
        } else {
            echo ("Opps! There was an error executing the statement.");
        };

    } else {
        echo ("Opps! There was an error preparing the statement.");
    };


    $conn->close();
}