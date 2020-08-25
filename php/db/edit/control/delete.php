<?php
$servername = "localhost";
$username = "bamshad";
$password = "5155658";
$dbname = "php_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
echo "the get id = $id";
echo "<br>";
// sql to delete a record
$sql = "DELETE FROM `users` WHERE `users`.`id` = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: ../index.php', true, 302);
?> 
