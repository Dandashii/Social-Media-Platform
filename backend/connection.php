<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "itec404";

$connection = new mysqli($servername, $username, $password, $db);

if ($connection->connect_error) {
	die("Connection to the database has failed: " . $connection->connect_error);
}