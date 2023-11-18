<?php
session_start();
session_regenerate_id(true);


if($_SERVER["REQUEST_METHOD"] == "POST") {
    require("./connect_db.php");
    $conn = connect_to_database();

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Select just the password. Only essential piece of information.
    $sql = "SELECT password_hash, user_id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (password_verify($password, $row["password_hash"])) {
        echo("Valid Password.");
        session_regenerate_id(true);
        $userData = [
            'user_id' => $row["user_id"],
            'authenticated'  => "true",
            'authenticated_on'  => time(),
        ];
        $_SESSION['user_data'] = $userData;
    } else {
        echo("Invalid Password.");
    }


    $stmt->close();
    $conn->close();

};