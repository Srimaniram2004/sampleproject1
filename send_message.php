<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the crop and details are provided
    if (isset($_POST["crop"]) && isset($_POST["details"])) {
        $selectedCrop = $_POST["crop"];
        $details = $_POST["details"];
        
        // Store the message in session
        $_SESSION['sent_message'] = array(
            'crop' => $selectedCrop,
            'details' => $details
        );
        
        // Redirect back to the send message page with a success message
        header("Location: send_message.php?status=success");
        exit();
    } else {
        // Handle case where crop or details are missing
        $errorMessage = "Please select a crop and provide details.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Send Message</title>
</head>
<body>

<h1>Send Message to Farmer</h1>

<?php if (isset($_GET['status']) && $_GET['status'] == "success"): ?>
    <h2>Message Sent Successfully</h2>
    <p>The crop details have been successfully sent to the farmer.</p>
<?php endif; ?>

<?php if (isset($errorMessage)): ?>
    <p><?php echo $errorMessage; ?></p>
<?php endif; ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="crop">Select Crop:</label><br>
  <select id="crop" name="crop">
    <option value="wheat">Wheat</option>
    <option value="corn">Corn</option>
    <option value="rice">Rice</option>
    <!-- Add more crop options as needed -->
  </select><br><br>
  <label for="details">Message:</label><br>
  <textarea id="details" name="details" rows="4" cols="50" required></textarea><br><br>
  <button type="submit">Send Message</button>
</form>

</body>
</html>
