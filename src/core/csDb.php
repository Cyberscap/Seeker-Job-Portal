<?php

// MySQL database
function openDatabaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "staph";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// close the connection to MySQL database
function closeDatabaseConnection($conn) {
    $conn->close();
}




?>