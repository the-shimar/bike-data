<?php
$servername = "sql555.main-hosting.eu";
$username = "u432291438_bikeshimar";
$password = "Shimar#Kestone1";
$dbname = "u432291438_bikegame";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bike";

//Post
$name = $_POST["name"];
$org = $_POST["org"];
$des = $_POST["des"];
$email = $_POST["email"];

//Get
// $name = $_GET["name"];
// $org = $_GET["org"];
// $des = $_GET["des"];
// $email = $_GET["email"];

// $name = "name";
// $org = "org";
// $des = "des";
// $email = "email";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bikedata (name, org, des, email, score)
VALUES ('$name', '$org', '$des', '$email', 0)";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
