<?php
// Start session
session_start();

// Check if the sent_message session variable is set
if (isset($_SESSION['sent_message'])) {
    // Display the sent message
    $sentMessage = $_SESSION['sent_message'];
    echo "<h2>Message from Dealer</h2>";
    echo "<p><strong>Crop:</strong> " . $sentMessage['crop'] . "</p>";
    echo "<p><strong>Details:</strong> " . $sentMessage['details'] . "</p>";
    
    // Unset the session variable to clear it after displaying
    unset($_SESSION['sent_message']);
} else {
    echo "<p>No messages received.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Home</title>
</head>
<body>

<h1>Welcome, Farmer!</h1>

<!-- Add more content for the farmer's home page as needed -->

</body>
</html>
