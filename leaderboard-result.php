<?php
$servername = "sql555.main-hosting.eu";
$username = "u432291438_bikeshimar";
$password = "Shimar#Kestone1";
$dbname = "u432291438_bikegame";

use LDAP\Result;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bike";

	//Heroku
			// Set 2 config variables in heroku with following commands:

			// 1 heroku config:set APP_DEBUG=true
			// 2 heroku config:set APP_KEY=RandomString


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bikedata
ORDER BY score asc LIMIT 5";

// $sql = "SELECT * FROM bikedata";
$result = $conn->query($sql);

// $row = mysqli_fetch_array($result);

// print_r($result);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. ", Name: " . $row["name"]. ", Score: " . $row["score"]. ";";
        echo  "name: " . $row["name"]. ", score: " . $row["score"]. ";";
    }

    // return $result;

    // $myJSON = json_encode($result);
    // echo $myJSON;

} else {
  echo "0 results";
}
$conn->close();
?>