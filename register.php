<?php
    session_start();
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'config.php';
    $rng = rand(0, 999); // bo nie działa auto_increment
    if ($_POST['referat']==='nie') {
      $referat=0;
    }
    else if ($_POST['referat']==='tak') {
      $referat=1;
    }
    $query="INSERT INTO `user`(`ID_user`, `imię`, `nazwisko`, `referat`, `aktywny`, `email`, `admin`, `pwd`) VALUES ('$rng','".$_POST['imie']."','".$_POST['nazwisko']."','".$referat."','0','".$_POST['mail']."','0','".$_POST['pwd']."');";

    if (mysqli_query($link, $query)) {
        echo "New record created successfully";
        header("location:index.php");
      } else {
        echo "Error: ".$query."<br>".mysqli_error($link);
        header("location:index.php");
      }
      
      mysqli_close($link);
?>