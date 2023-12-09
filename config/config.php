<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cafe";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn -> connect_errno) {
        die ("Connection Error: " . $conn -> connect_error);
    }

    return $conn;

?>