<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_mamagement_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
