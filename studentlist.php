<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'students';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("ERROR Could not connect to the database: " . $connection->connect_error);
}
echo "SUCCESS Connection to the database was successful<br><br><br>";


$sql = "SELECT FirstName, LastName, PersonalNumber FROM students";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["FirstName"]. " " . $row["LastName"]." - ". $row["PersonalNumber"] . "<br>";
  }
} else {
  echo "0 results";
}

$connection->close();

?>
