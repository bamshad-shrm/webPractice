<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'config.php';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$result = $conn->query("SELECT * FROM `customers` WHERE 1");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
	$outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"firstName":"'  . $rs["firstName"] . '",';
    $outp .= '"lastName":"'   . $rs["lastName"]        . '"}';
}
$outp ='{"customersInfo":['.$outp.']}';
$conn->close();

echo($outp);
?>

