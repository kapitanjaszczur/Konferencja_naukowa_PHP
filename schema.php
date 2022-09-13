<?php
    session_start();
    $prefix = $_SESSION['prefix'];

$create[] = "CREATE TABLE `".$prefix."` (
    `ID_user` int(3) NOT NULL,
    `imię` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
    `nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
    `referat` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'czy użytkownik chce wygłosić referat',
    `aktywny` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'czy admin zaakceptował użytkownika',
    `email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
    `admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'czy użytkownik to admin',
    `pwd` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL COMMENT 'hasło użytkownika'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;";

$create[] .= "ALTER TABLE `".$prefix."` ADD PRIMARY KEY (`ID_user`);";
$create[] .= "ALTER TABLE `".$prefix."` ADD KEY `ID_user` (`ID_user`);";
$create[] .= "COMMIT;";
?>
