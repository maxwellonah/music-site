<?php
session_start(); // Start a session (if not already started)

// Check if the form is submitted
if (isset($_POST["login"])) {
    // Simulated user credentials (replace with your own authentication logic)
    $validUsername = "your_valid_username";
    $validPassword = "your_valid_password";

    // Get user input from the form
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Check if the entered credentials match the valid credentials
    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Authentication successful, store a session variable (you can use a database for user authentication)
        $_SESSION["username"] = $enteredUsername;

        // Redirect to the index2.php page (or any other page you want after login)
        header("Location: http://localhost/IT/2/index2.php");
        exit();
    } else {
        // Authentication failed, display an error message (you can customize this)
        echo "Invalid username or password.";
        header("Location: http://localhost/IT/2/index1.php");
        exit();
    }
}
?>
