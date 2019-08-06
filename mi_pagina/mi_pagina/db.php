<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$db = "pag";
$conn = mysqli_connect($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
