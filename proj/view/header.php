<?php

include('../config/config.php');

// $title = '';


?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="unsafe-url">
    <title>BMO | <?= $title ?></title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/bilder.css">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/home.css">

</head>

<body>
    <!-- <header class="row-header">
        <h1 class="header-title">| <?= $title2 ?> |</h1>
    </header> -->
    <nav class="navbar">
        <ul class="col-h">
        <img class="logo" src="../img/bmo_logo.png" width="100px">

            <li><a href="home.php">Hem</a></li>
            <li><a href="articles.php">Artiklar</a></li>
            <li><a href="content.php">Content</a></li>
            <li><a href="om.php">Om</a></li>
            <li><a href="objects.php">Objekt</a></li>
            <li><a href="bilder.php">Bilder</a></li>
        </ul>
    </nav>