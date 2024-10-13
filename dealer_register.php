<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate and sanitize the data (you may add more validation as needed)
    $username = htmlspecialchars(trim($username));
    $password = htmlspecialchars(trim($password));

    // Check if both fields are filled
    if (!empty($username) && !empty($password)) {
        // Now, you can proceed to save the user data to your database
        // Here, you would typically use a database connection and execute an INSERT query
        
        // Example database connection (replace with your own database details)
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "rdbms";
        $dbname = "new";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Example INSERT query (replace with your own table structure)
        $sql = "INSERT INTO login(username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Both fields are required";
    }
}
?>
