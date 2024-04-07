<?php
// Assuming you've set the connection string in Azure as MYSQL_CONN_STRING
$connectionString = getenv('MYSQL_CONN_STRING');

// Parse the connection string
$matches = [];
preg_match('/mysql:host=(.+);dbname=(.+);user=(.+);password=(.+)/', $connectionString, $matches);
$host = $matches[1] ?? null;
$dbname = $matches[2] ?? null;
$username = $matches[3] ?? null;
$password = $matches[4] ?? null;

// Establish the database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}
?>
