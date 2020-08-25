<?php
include "config.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstName = $_POST["firstName"];

$lastName = $_POST["lastName"];

echo "$firstName";

echo "$lastName";

$sql = "INSERT INTO `users` (`id`, `firstName`, `lastName`) VALUES (NULL, '$firstName', '$lastName');";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: ../index.php', true, 302);
?> 
