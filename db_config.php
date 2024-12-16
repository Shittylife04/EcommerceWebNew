<?php
$servername = "localhost";  // Server address
$username = "root";         // Default XAMPP MySQL username
$password = "";             // Default XAMPP MySQL password (leave empty)
$dbname = "jacks_shop";     // The name of your database

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
