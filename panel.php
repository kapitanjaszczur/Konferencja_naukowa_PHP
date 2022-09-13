<?php 
    session_start();
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<!DOCTYPE html>
<html>
    <?php
    include 'header.php';
    ?>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <?php
        if ($_SESSION['admin']==="0") { //user
            include "witaj.php";
        }
        else if ($_SESSION['admin']==="1") { //admin
            include "admin.php";
        }
        else {
            echo "<div class='row'>";
            echo "<div class='col-2'></div>";
            echo "<div class='col-8'>Brak dostępu! <a class='navbarbtn' href='http://www.manticore.uni.lodz.pl/~dxmirage/logowanie.php'>Zaloguj się!</a></div>";
            echo "</div>";
        }
        ?>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>