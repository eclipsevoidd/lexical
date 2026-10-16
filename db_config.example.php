<?php
$server_name = "your-host";
$username = "your-username";
$password = "your-password";
$db_name = "your-database";

$connection = mysqli_connect($server_name, $username, $password, $db_name);

if (!$connection) {
    die("connection failed :(");
}