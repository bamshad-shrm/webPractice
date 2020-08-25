<?php

$host = "localhost"; /* Host name */
$user = "bamshads_bamshad"; /* User */
$password = "Bamshad_5155658"; /* Password */
$dbname = "bamshads_php_test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 	die("Connection failed: " . mysqli_connect_error());
}
