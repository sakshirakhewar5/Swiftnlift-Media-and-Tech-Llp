<?php
session_start();
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit();
    }

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        echo "Error preparing statement: " . $conn->error;
        exit();
    }
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        $_SESSION["user_id"] = $conn->insert_id; // Store the auto-incremented user ID
        $_SESSION["full_name"] = $fullname;
        $_SESSION["email"] = $email;
        header("Location: index.php#signup");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
