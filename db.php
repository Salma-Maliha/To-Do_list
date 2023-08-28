<?php
// Database configuration
$servername = "localhost";

$dbname = "tododb";

// Create a database connection
$conn = new mysqli($servername, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>