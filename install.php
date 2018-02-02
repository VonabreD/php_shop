<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 02.02.2018
 * Time: 0:17
 */
require_once "./database.php";

$admin = "admin";
$admin_pass = "admin";
try {
	$conn = new PDO("mysql:host=$DB_HOST;port=$MYSQL_PORT", $DB_USER, $DB_PASS);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql =
		<<<_SQL_QUERY
	CREATE DATABASE `$DB_NAME`;
	CREATE USER '$admin'@'localhost' IDENTIFIED BY '$admin_pass';
	GRANT ALL ON `$DB_NAME`.* TO '$admin'@'localhost';
	FLUSH PRIVILEGES;
_SQL_QUERY;
	$conn->exec($sql) or die (print_r($conn->errorInfo(), true));
} catch (PDOException $exception) {
	die("DB ERROR: " . $exception->getMessage());
}
?>