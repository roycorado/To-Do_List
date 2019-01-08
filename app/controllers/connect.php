<?php

$host = "db4free.net";
$username = "roycorado";
$password = "Roy1204#";
$dbname = "todo_app_db1";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed;' . mysqli_error($conn));
} else {
	echo 'connected successfully';
}



?>