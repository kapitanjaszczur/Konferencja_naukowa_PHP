<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php
    include 'header.php';
    ?>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <form action="login.php" method="post">
            <div class="form-group row">
                <div class="col-2"> </div>
                <label class="col-2 col-form-label" for="login">Adres e-mail: </label>
                <div class="col-1"> </div>
                <div class="col-5">
                    <input id="email" name="email" type="email" class="form-control" required="required">
                </div>
                <div class="col-2"> </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-2"> </div>
                <label class="col-2 col-form-label" for="login">Hasło: </label>
                <div class="col-1"> </div>
                <div class="col-5">
                    <input id="haslo" name="haslo" type="password" class="form-control" required="required">
                </div>
                <div class="col-2"> </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-5"> </div>
                <div class="col-2">
                    <button name="submit" type="submit" class="btn btn-primary"><span class="spinner-grow spinner-grow-sm"></span>Zaloguj</button>
                </div>
                <div class="col-5"> </div>
            </div>
        </form>
        <?php if ($_SESSION['wrong_login']===true) {
            echo "<p>Nieprawidłowe dane logowania lub nieaktywne konto</p>";
        }
        ?>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
