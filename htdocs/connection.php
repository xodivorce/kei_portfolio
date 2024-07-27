<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'kei_portfolio';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>