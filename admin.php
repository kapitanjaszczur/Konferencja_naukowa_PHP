<?php 
    session_start();
    
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<html>
    <?php
    include 'header.php';
    ?>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br><br>
        <a id="logout-btn" class="btn btn-danger" href="logout.php">Wyloguj</a>
        <p class="admin">Witaj administratorze <?php $imie = $_SESSION['imię']; echo "$imie"; ?>!</p><br>
        <p class="admin">Lista aktywnych użytkowników</p>
        <?php
        include 'config.php';

        $query="SELECT * FROM `user` WHERE `aktywny`='1' AND `admin`='0';";
        $wynik=mysqli_query($link, $query);

        if ($wynik->num_rows > 0) {
        // output data of each row
            while($row = $wynik->fetch_assoc()) {
                echo "<p class='admin'>ID: ".$row["ID_user"]." - Imię i nazwisko: " .$row["imię"]." ".$row["nazwisko"]."</p>";
        }}
        ?>
        <br>
        <form action="dezaktywuj.php" method="POST" class="admin">
            <p>Podaj ID użytkownika którego chcesz dezaktywować</p>
            <input type="text" name="id-dez" required>&nbsp;
            <button class="btn btn-warning" type="submit">Dezaktywuj</button>
        </form>

        <br>
        <p class="admin">Lista nieaktywnych użytkowników</p>
        <?php 
        $query2="SELECT * FROM `user` WHERE `aktywny`='0';";
        $wynik2=mysqli_query($link, $query2);

        if ($wynik2->num_rows > 0) {
        // output data of each row
            while($row2 = $wynik2->fetch_assoc()) {
                echo "<p class='admin'>ID: ".$row2["ID_user"]." - Imię i nazwisko: " .$row2["imię"]." ".$row2["nazwisko"]."</p>";
        }}
        ?>
        <br>
        <form action="aktywuj.php" method="POST" class="admin">
            <p>Podaj ID użytkownika którego chcesz aktywować</p>
            <input type="text" name="id-akt" required>&nbsp;
            <button class="btn btn-info" type="submit">Aktywuj</button>
        </form>

        <br>
        <form action="nadajadmina.php" method="POST" class="admin">
            <p>Podaj ID użytkownika którego chcesz uczynić adminem</p>
            <input type="text" name="id-adm" required>&nbsp;
            <button class="btn btn-danger" type="submit">Nadaj uprawnienia</button>
        </form>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>

