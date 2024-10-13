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
