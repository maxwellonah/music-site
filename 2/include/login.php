<?php
session_start(); // Start a session (if not already started)

// Check if the form is submitted
if (isset($_POST["login"])) {
    // Database connection details (replace with your own)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wave_app";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input from the form
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Prepare a SQL query to fetch the user's password hash based on the entered username
    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $enteredUsername);
        $stmt->execute();
        $stmt->store_result();

        // Check if a user with the entered username exists
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($dbUsername, $dbPassword);
            $stmt->fetch();

            // Verify the entered password against the stored password hash
            if (password_verify($enteredPassword, $dbPassword)) {
                // Authentication successful, store the username in a session variable
                $_SESSION["username"] = $enteredUsername;

                // Redirect to the index2.php page (or any other page you want after login)
                header("Location: http://localhost/IT/2/index2.php");
                exit();
            } else {
                // Authentication failed, display an error message
                echo "Invalid username or password.";
                header("Location: http://localhost/IT/2/index1.php?#");
                exit();
            }
        } else {
            // Authentication failed, user doesn't exist, display an error message
            header("Location: http://localhost/IT/2/index1.php");
            echo "Invalid username or password.";
            exit();
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
