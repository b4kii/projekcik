<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@700&display=swap" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <!-- Bar menu --> 
    <nav class="navbar">
        <div class="logo">LOGO</div>
        <a class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="index.php#about">O mnie</a></li>
                <li><a href="index.php#price-list">Cennik</a></li>
                <li><a href="index.php#contact">Kontakt</a></li>
                <?php
                    if(isset($_SESSION["userid"])) {
                        echo "<li><a href='logged.php'>Canvas</a></li>";
                        echo "<li><a href='includes/logout_inc.php'>Wyloguj się</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Zarejestruj się</a></li>";
                        echo "<li><a href='login.php'>Zaloguj się</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>