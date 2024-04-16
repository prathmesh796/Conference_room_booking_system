<?php
// Database configuration
$host = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave it empty if not set)
$database = "conference_room_booking_system"; // Database name

// Attempt to connect to MySQL database
echo "Attempting to connect to database...";
$conn = new mysqli($host, $username, $password, $database, 3307);

// Check connection
if ($conn->connect_error) {
    // Display detailed error message for debugging
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully"; // Indicate successful connection
}

// Close connection (optional, you may not need to close it immediately)
//$conn->close();
?>
