<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    echo "tangina";
} catch (PDOException $e) {
    echo "" . $e->getMessage() . "";
}

phpinfo();

?>