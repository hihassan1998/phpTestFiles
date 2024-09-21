<?php

include('../config/config.php');

$title = 'Test- sidan';

?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="unsafe-url">
    <title><?= $title ?> | Me-sidan</title>
    <link rel="shortcut icon" href="img/hassan_logo_cut.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/byline.css">
    <link rel="stylesheet" href="css/today.css">
</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="tab1.php">Tab 1</a></li>
            <li><a href="tab2.php">PHP > 1</a></li>
            <li><a href="tab3.php">Tab 3 (Check Day)</a></li>
            <li><a href="tab4.php">Tab 4</a></li>
            <li><a href="tab3.php">Calender</a></li>
            <li><a href="tab5.php">Tab 5</a></li>
        </ul>
    </nav>
    <header class="header">
        <img class="logo" src="img/hassan_logo_cut.png" alt="bild på logo">
        <span class="title"><?= $title ?></span>
        <span class="subtitle">Raportsida</span>
    </header>