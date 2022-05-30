<?php
    include_once "header.php"    
?>
    <section class="middle">
        <div class="con">

        <div class="header">
            <h2>Zarejestruj się</h2>
        </div>
        <form class="sform" id="sform" action="includes/signup_inc.php" method="post">
            <div class="form-control">
                <label for="username">Podaj nazwę użytkownika</label>
                <input type="text" name="username" id="username" placeholder="Nazwa użytkownika">
                <small></small>
                <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "userexists") {
                            echo "<script>
                                const user = document.getElementById('username');
                                const get = user.parentElement;
                                const small = get.querySelector('small');

                                small.innerText = 'Użytkownik już istnieje!';
                                get.className = 'form-control error';
                            </script>";
                        } 
                    }
                ?>
            </div>
            <div class="form-control">
                <label for="passwd">Podaj hasło</label>
                <input type="password" name="passwd" id="passwd" placeholder="Hasło">
                <small></small>
            </div>
            <div class="form-control">
                <label for="repeat">Powtórz hasło</label>
                <input type="password" name="repeat" id="repeat" placeholder="Powtórz hasło">
                <small></small>
            </div>
            <div class="form-control">
                <label for="email">Podaj email</label>
                <input type="text" name="email" id="email" placeholder="Email">
                <small></small>
            </div>
            <button type="submit" name="submit">Zarejestruj się</button>
            <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "none") {
                        echo "<p>Konto zostało utworzone pomyślnie!</p>";
                    }
                }
            ?>
        </form>
        </div>
    </section>
<?php 
    include_once "footer.php"
?>
