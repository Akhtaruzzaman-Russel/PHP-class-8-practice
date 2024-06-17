<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "theamzone";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

echo "Database Connection Successful";

// Close connection

mysqli_close($conn);

?>