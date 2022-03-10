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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <title>Projekt</title>
</head>
<body>
    <!-- Bar menu --> 
    <nav class="navbar">
        <div class="logo"> 
            <a href="index.php"><img src="img/mapa.png" alt="test" width="50" height="25"></a>
        </div>
        <a class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
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