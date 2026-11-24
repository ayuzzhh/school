
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ymca_school";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
