<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed :' . $conn->connect_error);
} else {
    $stmt - $conn->prepare("insert into registration(username, password)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    echo "regis sukses";
    $stmt->close();
    $conn->close();
}
