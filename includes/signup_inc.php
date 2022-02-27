<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];
    $passwdRepeat = $_POST["repeat"];
    $email = $_POST["email"];

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    if(userExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=userexists");
        exit();
    }

    createUser($conn, $username, $email, $passwd);
} else {
    header("location: ../signup.php");
    exit();
}