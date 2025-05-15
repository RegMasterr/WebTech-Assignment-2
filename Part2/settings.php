<?php
$host = "localhost";
$user = "root";
$pwd = "";
$database = "project2";

$conn = mysqli_connect($host, $user, $pwd, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>