<?php 

function userExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userLogin = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $passwd) {
    $sql = "INSERT INTO users (userLogin, userEmail, userPassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    $hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPasswd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function loginUser($conn, $username, $passwd) {
    $ifexists = userExists($conn, $username, $username);
    if($ifexists === false) {
        header("location: ../login.php?error=wrong");
        exit();
    }

    $passwdHashed = $ifexists["userPassword"];
    $passwdCheck = password_verify($passwd, $passwdHashed);

    if($passwdCheck === false) {
        header("location: ../login.php?error=wrong");
        exit();
    } else if($passwdCheck === true) {
        session_start();
        $_SESSION["userid"] = $ifexists["userId"];
        $_SESSION["userName"] = $ifexists["userLogin"];
        header("location: ../logged.php");
        exit();
    }
}
