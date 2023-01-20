<?php
$servername = getenv("DB_SERVERNAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

// Create connection
$conn = new mysqli($servername, $username, $password, "miraback", 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!<br>";

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
    echo("Number: " . $row["number"] . " Price: " . $row["price"] . "<br>");
}