<?php
    session_start();
    // ini_set('display_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'config.php';

    $query="UPDATE `user` SET `aktywny`='0' WHERE `user`.`ID_user`='".$_POST['id-dez']."';";
    mysqli_query($link, $query);

    header("location:panel.php");
?>