<?php

$serverName = "localhost";
$dbUsername = "damian.halibart";
$dbPassword = "12345678";
$dbName = "damian.halibart";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// $query1 = "CREATE TABLE users (
//     userId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
//     userLogin varchar(128) NOT NULL,
//     userEmail varchar(128) NOT NULL,
//     userPassword varchar(128) NOT NULL
// );";

// $query2 = "CREATE TABLE lists (
//     listId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
//     val varchar(255),
//     userId int(11),
//     FOREIGN KEY (userId) REFERENCES users(userId)
// );";

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}