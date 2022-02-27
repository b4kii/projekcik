<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    require_once "dbh_inc.php";
    require_once "functions_inc.php";

    if(empty($username) || empty($passwd)) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    if(!userExists($conn, $username, $username)) {
        header("location: ../login.php?error=notexist");
        exit();
    }

    loginUser($conn, $username, $passwd);
} else {
    header("location: ../login.php");
    exit();
}