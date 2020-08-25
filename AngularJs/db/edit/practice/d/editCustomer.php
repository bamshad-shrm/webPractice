<?php 
	require_once 'config.php'; // The mysql database connection script
	if(isset($_GET['id'],$_GET['firstName'],$_GET['lastName'])){
		$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
		$id = $mysqli->real_escape_string($_GET['id']);
		$firstName = $mysqli->real_escape_string($_GET['firstName']);
		$lastName = $mysqli->real_escape_string($_GET['lastName']);
		$status = "0";
		$created = date("Y-m-d", strtotime("now"));

		$query="UPDATE `customers` SET `firstName` = '$firstName', `lastName` = '$lastName' WHERE `customers`.`id` = $id;";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

		$result = $mysqli->affected_rows;

		echo $json_response = json_encode($result);
	}
?>
