<?php
    include_once "header.php"    
?>
    <section class="middle">
        <div class="con">
            <div class="header">
                <h2>Zaloguj się</h2>
            </div>
            <form id="lform" class="sform" action="includes/login_inc.php" method="post">
                <div class="form-control">
                    <label for="lusername">Nazwa użytkownika</label><br>
                    <input type="text" id="lusername" name="username" placeholder="Twoja nazwa" required>
                    <small></small>
                    <?php 
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "notexist") {
                                echo "<script>
                                    const user = document.getElementById('lusername');
                                    const get = user.parentElement;
                                    const small = get.querySelector('small');

                                    small.innerText = 'Podany użytkownik nie instnieje!';
                                    get.className = 'form-control error';
                                </script>";
                            }

                            if($_GET["error"] == "wrong") {
                                echo "<script>
                                    const user = document.getElementById('lusername');
                                    const getUser = user.parentElement;
                                    const small = getUser.querySelector('small');
                                    
                                    small.innerText = 'Niepoprawna nazwa użytkownika lub hasło!';
                                    getUser.className = 'form-control error';
                                    
                                </script>";
                            }
                        }
                    ?>
                </div>
                <div class="form-control">
                    <label for="lpasswd">Hasło</label><br>
                    <input type="password" id="lpasswd" name="passwd" placeholder="Twoje hasło" required>
                    <small></small>
                    <?php
                        if(isset($_GET["error"])) {
                            if($_GET["error"] === "wrong") {
                                echo "<script>
                                    const lpasswd = document.getElementById('lpasswd');
                                    const getPasswd = lpasswd.parentElement;
                                    const sm = getPasswd.querySelector('small');
                                    
                                    sm.innerText = 'Niepoprawna nazwa użytkownika lub hasło!';
                                    getPasswd.className = 'form-control error';
                                </script>";
                            }
                        }
                    ?>
                </div>
                <button type="submit" name="submit">Loguj</button>
            </form>
        </div>
    </section>
<?php 
    include_once "footer.php"
?>