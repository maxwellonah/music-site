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
