<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your database connection parameters
    $servername = "localhost";
    $username = "admin"; // Change this to your actual admin username
    $password = "admin123"; // Change this to your actual admin password
    $dbname = "new"; // Change this to your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    // SQL query to check if the username and password match an admin record in the database
    $sql = "SELECT * FROM admin WHERE username='$admin_username' AND password='$admin_password'";
    $result = $conn->query($sql);

    // Check if a row is returned (admin credentials are correct)
    if ($result->num_rows == 1) {
        // Admin login successful, set session variables
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin_username;

        // Redirect to admin dashboard or homepage
        header("Location: index.html"); // Change this to the appropriate admin dashboard page
        exit();
    } else {
        // Admin login failed, redirect back to login page with error message
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: admin_login.php"); // Change this to your admin login page
        exit();
    }

    // Close the database connection
    $conn->close();
}
?>
