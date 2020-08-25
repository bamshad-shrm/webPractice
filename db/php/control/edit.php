<?php
include "config.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

echo "the get id = $id";
echo "<br>";
//echo "the new Name = $firstName";
//echo "<br>";
//echo "the new Faily = $lastName";
//echo "<br>";

// sql to edit a record
$sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName' WHERE `users`.`id` = $id;";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: ../index.php', true, 302);
?> 
