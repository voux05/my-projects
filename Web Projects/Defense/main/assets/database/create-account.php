<?php include "connection.php";

$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$contact = $_POST['contact'];

try {
    $conn->exec("INSERT INTO logindata(email, username, password, contact) VALUES('$email', '$user', '$pass', '$contact')");
} catch (PDOException $th) {
    echo "error";
}

?>