<?php
session_start();
// Include database connection file
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $number = $_POST['Number'];
    $email_subject = $_POST['Email_Subject'];
    $message = $_POST['Message'];

    // Validate input
    // You can add more validation logic here

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, number, email_subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $number, $email_subject, $message);

    if ($stmt->execute()) {
        // Set a success message in the session
        $_SESSION['message'] = "Thank you for contacting us. We will contact you soon.";
        $_SESSION['message_type'] = "success";
    } else {
        // Set an error message in the session
        $_SESSION['message'] = "There was an error sending your message. Please try again.";
        $_SESSION['message_type'] = "error";
    }

    // Redirect to the form page
    header("Location: index.php");
    exit();

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
