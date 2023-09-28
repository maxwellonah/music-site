<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Database connection details (replace with your own)
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "wave_app";

    // Create a connection to the database
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data (add validation/sanitization as needed)
    $artist = $_POST["artist"];
    $song = $_POST["song"];
    

    // Check if the 'coverart' and 'audio' keys exist in $_FILES
    if (isset($_FILES["coverart"]) && isset($_FILES["audio"])) {
        // File upload handling
        $coverart = $_FILES["coverart"]["name"];
        $coverart_tmp = $_FILES["coverart"]["tmp_name"];
        $audio = $_FILES["audio"]["name"];
        $audio_tmp = $_FILES["audio"]["tmp_name"];

        // Directory where uploaded files will be moved (use absolute paths)
        $uploadDirectory1 = $_SERVER['DOCUMENT_ROOT'] . "/IT/2/images/audio1/"; 
        $uploadDirectory2 = $_SERVER['DOCUMENT_ROOT'] . "/IT/2/audio/";

        // Construct full file paths (using backslashes)
        $coverartPath = $uploadDirectory1 . $coverart;
        $audioPath = $uploadDirectory2 . $audio;

        // Additional paths for retrieval
        $maincoverartpath = "images/audio1/" . $coverart;
        $mainaudiopath = "audio/" . $audio;

        // Move uploaded files to the desired directory
        if (move_uploaded_file($coverart_tmp, $coverartPath) && move_uploaded_file($audio_tmp, $audioPath)) {
            // Files moved successfully

            // Insert data into the database using prepared statement
            $sql = "INSERT INTO music (artist, song, coverart, audio) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $artist, $song, $maincoverartpath, $mainaudiopath);

            if ($stmt->execute()) {
                // Data inserted successfully
                header("Location: cms.php?success=1");
                exit(); // Ensure no further output is sent
            } else {
                // Log the error and provide a user-friendly message
                error_log("Error inserting data: " . $stmt->error);
                echo "An error occurred while inserting data.";
            }

            // Close the database connection
            $stmt->close();
        } else {
            // Handle file upload errors
            echo "File upload error: Unable to move files to the destination directory.";
        }
    } else {
        // Handle the case where 'coverart' or 'audio' keys are missing
        echo "File upload error: 'coverart' or 'audio' file not provided.";
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect the user to the form page if the form was not submitted
    echo "Data not inserted";
    exit();
}
