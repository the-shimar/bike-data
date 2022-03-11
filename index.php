<?php

$servername = "sql555.main-hosting.eu";
$username = "u432291438_bikeshimar";
$password = "Shimar#Kestone1";
$dbname = "u432291438_bikegame";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bikedata (name, org, des, email)
VALUES ('new', 'org', 'des', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


?>