<?php 
	require_once 'config.php'; // The mysql database connection script
	if(isset($_GET['firstName'],$_GET['lastName'])){
		$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
		$firstName = $mysqli->real_escape_string($_GET['firstName']);
		$lastName = $mysqli->real_escape_string($_GET['lastName']);

		$query="INSERT INTO `customers` (`id`, `firstName`, `lastName`) VALUES (NULL, '$firstName', '$lastName');";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

		$result = $mysqli->affected_rows;

		echo $json_response = json_encode($result);
	}
?>
