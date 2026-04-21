<?php
//This is the database connection settings
$host = "localhost";  // XAMPP runs MySQL on localhost
$username = "root";    // Default XAMPP username
$password = "";        // Default XAMPP password is empty
$database = "website_db";  // The database created in phpMyAdmin

// This opens a connection to MySQL using the settings above
$conn = new mysqli($host, $username, $password, $database);

// If the connection fails, it stops everything and shows the error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>