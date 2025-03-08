<?php

// credentials
$host = '127.0.0.1';
$username = 'root';
$password = '';
$db = 'users';

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database successfully";
} catch (PDOException $e) {
    echo "Connection to database failed: " . $e->getMessage();
}

$con = null;

?>
