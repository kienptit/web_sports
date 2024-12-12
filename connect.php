<?php
// Kết nối
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports_web";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}