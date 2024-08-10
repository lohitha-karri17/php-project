<?php
$postId = 1; // Assuming a single post for demonstration

// Connect to the database (replace with your actual database credentials)
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

// Update likes in the database
$likeCount = $_POST['likeCount'];
$stmt = $con->prepare("UPDATE posts SET likes = ? WHERE post_id = ?");
$stmt->bind_param('ii', $likeCount, $postId);
$stmt->execute();

// Update comments in the database
$commentCount = $_POST['commentCount'];
$stmt = $con->prepare("UPDATE posts SET comments = ? WHERE post_id = ?");
$stmt->bind_param('ii', $commentCount, $postId);
$stmt->execute();

// Close the database connection
$stmt->close();
$con->close();
?>
