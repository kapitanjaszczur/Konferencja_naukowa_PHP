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
        <a id="logout-btn" class="btn btn-danger" href="logout.php">Wyloguj</a>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 wyjustowanie">
                <p>Witaj użytkowniku <?php $imie = $_SESSION['imię']; echo "$imie"; ?>!</p>
                <?php if ($_SESSION['referat']==="1") { echo "<p>Dziękujemy że zaprezentujesz referat!</p>"; } ?>
            </div>
            <div class="row">
                <p class="col-1"> </p>
                <p class="col-5 wyjustowanie">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Mauris congue, ante vel mollis ornare, mauris leo consequat diam, vestibulum eleifend sem magna non nisl. 
                    Integer viverra interdum nisi, interdum ultricies mi semper nec. Mauris odio arcu, aliquam vitae tellus a, varius efficitur risus. 
                    Curabitur finibus facilisis ligula, eget porttitor libero malesuada vitae. Quisque mattis sodales sem nec elementum. 
                    Nullam vehicula nisl at ipsum aliquam, sit amet porttitor neque sagittis. Sed laoreet vehicula lorem at tempus. 
                    Maecenas mauris nisl, viverra et arcu eget, ornare auctor metus. Maecenas eu mauris in sapien venenatis fermentum et eu tortor. 
                    Duis congue blandit lacus in malesuada. Fusce tempus tincidunt pretium. Nam gravida nisl ex, ut tempor nibh feugiat id. Cras at consequat augue. 
                    Duis vitae aliquam tortor.</p>
                <p class="col-5 wyjustowanie">Phasellus quis cursus velit, consectetur tincidunt ante. Sed nec nibh eu leo dictum viverra. Suspendisse potenti. 
                    Vivamus finibus ipsum venenatis molestie vestibulum. Fusce nec consequat mi. 
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse rhoncus turpis sapien, vel pellentesque dui mollis vel. 
                    Aenean vitae iaculis velit, ut gravida elit. In augue augue, hendrerit a tempus vel, ornare sed nisi. Praesent hendrerit tellus risus, eu auctor diam viverra non. 
                    Proin facilisis vel neque nec congue. Donec nisl eros, finibus non egestas placerat, lacinia in augue. Donec vel posuere est. Nulla at sollicitudin sapien.</p>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
