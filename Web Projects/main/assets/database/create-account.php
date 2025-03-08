<?php include "connection.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$contact = $_POST['contact'];

try {
    $con->exec("INSERT INTO logindata VALUES('$email', '$username', '$password', '$contact')");
} catch (PDOException $e) {
    echo "error";
}

?>