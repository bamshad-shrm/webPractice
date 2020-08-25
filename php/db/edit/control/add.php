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

$name = $_POST["name"];

$family = $_POST["family"];

echo "$name";

echo "$family";

$sql = "INSERT INTO `users` (`id`, `User Name`, `User Family`) VALUES (NULL, '$name', '$family');";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: ../index.php', true, 302);
?> 
