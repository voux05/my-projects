<?php
// MySQLi connection example
$servername = "192.168.100.13";
$username = "root";  // Or your MariaDB username
$password = "";  // Or your MariaDB password
$dbname = "users";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully with MySQLi";

// Close the connection
$conn->close();
?>
