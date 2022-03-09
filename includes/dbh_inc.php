<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "logowanie";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// TODO: Create users and lists if not exist;

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}