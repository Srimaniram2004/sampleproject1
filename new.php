<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Type Selection</title>
</head>
<body>

<h1>User Type Selection</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user type is selected
    if (isset($_POST["userType"])) {
        $userType = $_POST["userType"];
        
        // Redirect based on user type
        if ($userType === "farmer") {
            header("Location: farmer_login.html"); // Redirect to farmer login page
            exit();
        } elseif ($userType === "dealer") {
            header("Location: dealer_login.html"); // Redirect to dealer login page
            exit();
        }
    } else {
        // Handle case where user type is not selected
        echo "Please select a user type.";
    }
}
?>

<form method="post">
  <label for="userType">Select user type:</label><br>
  <select id="userType" name="userType">
    <option value="farmer">Farmer</option>
    <option value="dealer">Dealer</option>
  </select><br><br>
  <button type="submit">Proceed</button>
</form>

</body>
</html>
