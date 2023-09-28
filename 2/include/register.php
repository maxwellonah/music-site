<?php
// Check if the form is submitted
if (isset($_POST["register"])) {
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
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Perform input validation (you can add more validation as needed)
    if (empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        array_push($errors, "Password does not match"); // Replace with your login page URL
        exit();
    } else {
        // Check if the entered username already exists in the database
        $checkUsernameQuery = "SELECT username FROM users WHERE username = ?";
        $stmt = $conn->prepare($checkUsernameQuery);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $existingUsername = $result->fetch_assoc();

        if ($existingUsername) {
            header("Location: http://localhost/IT/2/index1.php?existinguser=1"); // Replace with your login page URL
            exit();
        } else {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert user data into the database
            $insertQuery = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);

            if ($stmt) {
                $stmt->bind_param("sss", $email, $username, $hashedPassword);
                if ($stmt->execute()) {
                    // Registration successful, redirect to the login page or display a success message
                    header("Location: http://localhost/IT/2/index1.php?registrationSuccess=1"); // Replace with your login page URL
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }

    // Close the database connection
    $conn->close();
}
?>