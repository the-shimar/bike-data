<?php
$servername = "sql555.main-hosting.eu";
$username = "u432291438_bikeshimar";
$password = "Shimar#Kestone1";
$dbname = "u432291438_bikegame";

$name = $_POST["name"];
$org = $_POST["org"];
$des = $_POST["des"];
$email = $_POST["email"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bikedata (name, org, des, email)
VALUES ($name, $org, $des, $email)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>