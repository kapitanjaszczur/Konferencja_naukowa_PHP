<?php
    session_start();
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'config.php';
    $query= "SELECT * FROM `user` WHERE `email`='".$_POST['email']."' AND `pwd`='".$_POST['haslo']."' AND `aktywny`='1';";
    $wynik=mysqli_query($link, $query);
    if (mysqli_num_rows($wynik) > 0) {
       
        if (mysqli_num_rows($wynik) === 1) {
            $wiersz = mysqli_fetch_assoc($wynik);

            $_SESSION['ID_user']=$wiersz['ID_user'];
            $_SESSION['email']=$wiersz['email'];
            // $_SESSION['pwd']=$wiersz['pwd'];
            $_SESSION['imię']=$wiersz['imię'];
            $_SESSION['nazwisko']=$wiersz['nazwisko'];
            $_SESSION['aktywny']=$wiersz['aktywny'];
            $_SESSION['admin']=$wiersz['admin'];
            $_SESSION['referat']=$wiersz['referat'];

        if ($_SESSION['admin']==='0') {
            header("location:witaj.php");
        }
        else if ($_SESSION['admin']==='1') {
            header("location:admin.php");
        }
        }

    } 
    else {
        $_SESSION['wrong_login']=true;
        header("location:logowanie.php");
    }

    mysqli_close($link);    
?>