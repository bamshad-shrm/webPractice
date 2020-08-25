<?php 
	require_once 'config.php'; // The mysql database connection script
	if(isset($_GET['id'])){
		$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
		$id = $mysqli->real_escape_string($_GET['id']);

		$query="DELETE FROM `customers` WHERE `customers`.`id` = $id;";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

		$result = $mysqli->affected_rows;

		echo $json_response = json_encode($result);
	}
?>
