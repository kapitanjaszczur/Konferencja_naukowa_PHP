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
        <h2 class="wyśrodkowanie">Kontakt z organizatorem konferencji</h2>
        <div class="container">
            <div class="col-10">
                <dl>
                    <dt>Organizator</dt>
                    <dd>Stowarzyszenie amatorów historii</dd>
                    <dt>Adres e-mail:</dt>
                    <dd>adres@email.edu</dd>
                    <dt>Telefon kontaktowy:</dt>
                    <dd>123-456-789</dd>
                </dl>
            </div>
        </div>
        <div class="container">
            <div class="col-10">
                <p>Strona została przygotowana w ramach projektu zaliczeniowego z przedmiotu Aplikacje Internetowe</p>
                <p>Autor: Jakub Klonowski</p>
                <p>Strona wykorzystuje technologie: HTML, CSS, PHP, bootstrap5.</p>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
