<?php

$host = "";
$username = "root";
$password = "";
$dbname = "cafe";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

return $conn;
