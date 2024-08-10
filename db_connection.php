<?php
// Database connection details
$db_host = "localhost"; // Replace with your database host
$db_user = "root"; // Replace with your database username
$db_password = ""; // Replace with your database password
$db_name = "php-database"; // Replace with your database name

// Create a database connection
$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set the character set to utf8
mysqli_set_charset($con, "utf8");
?>
