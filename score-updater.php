<?php

header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Origin: *");

$servername = "sql555.main-hosting.eu";
$username = "u432291438_bikeshimar";
$password = "Shimar#Kestone1";
$dbname = "u432291438_bikegame";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bike";

//Post
$id = $_POST["id"];
$score = $_POST["score"];

// $id = 1;
// $score = 101;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO bikedata (name, org, des, email, score)
// VALUES ('$name', '$org', '$des', '$email', 0)";

$sql = "UPDATE bikedata
SET score = $score
WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "New score updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>