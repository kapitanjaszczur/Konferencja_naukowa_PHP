<?php 
    session_start();
    
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $dbname=$_SESSION['dbname'];
    $prefix=$_SESSION['prefix'];
    $rng = rand(0, 999); // bo nie działa auto_increment
    
    $insert[] = "INSERT INTO `".$prefix."` (`ID_user`, `imię`, `nazwisko`, `referat`, `aktywny`, `email`, `admin`, `pwd`) VALUES ('$rng','".$_POST['admin-imie']."','".$_POST['admin-nazwisko']."','0','1','".$_POST['admin-email']."','1','".$_POST['admin-pwd']."');";

    $link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['password'], $_SESSION['dbname']);
    mysqli_select_db($link, $dbname) or die(mysqli_error($link));
    for($i=0;$i<count($insert);$i++){
      echo "<p>".$i.". <code>".$insert[$i]."</code></p>\n";
      mysqli_query($link, $insert[$i]);                   
    }
    $link -> close();
    echo "Utworzono konto administratora, instalacja zakończona";
?>