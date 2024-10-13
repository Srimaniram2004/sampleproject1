<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dealer Home</title>
</head>
<body>

<h1>Welcome, Dealer!</h1>

<h2>Select Crop to Send to Farmer:</h2>

<form action="send_message.php" method="post">
  <label for="crop">Select Crop:</label><br>
  <select id="crop" name="crop">
    <option value="wheat">Wheat</option>
    <option value="corn">Corn</option>
    <option value="rice">Rice</option>
    <!-- Add more crop options as needed -->
  </select><br><br>
  <label for="details">Message to Farmer:</label><br>
  <textarea id="details" name="details" rows="4" cols="50" required></textarea><br><br>
  <button type="submit">Send Message to Farmer</button>
</form>

</body>
</html>
