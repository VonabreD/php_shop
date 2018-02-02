<?php

require_once "database.php";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
if ($conn->connect_error) {
	die("Connect error: " . $conn->connect_error);
}
$sql = "DROP DATABASE $DB_NAME";
if ($conn->query($sql) === TRUE) {
	echo "Database succesfully dropepd!";
} else {
	echo "Error with database drop!";
}
$conn = null;
?>