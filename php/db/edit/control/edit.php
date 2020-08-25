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
$name = $_POST["name"];
$family = $_POST["family"];

echo "the get id = $id";
echo "<br>";
//echo "the new Name = $name";
//echo "<br>";
//echo "the new Faily = $family";
//echo "<br>";

// sql to edit a record
$sql = "UPDATE `users` SET `User Name` = '$name', `User Family` = '$family' WHERE `users`.`id` = $id;";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: ../index.php', true, 302);
?> 
