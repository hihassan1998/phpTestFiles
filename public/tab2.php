<?php
include("../config/config.php");
$title =  "Träna på PHP";
include("../view/header.php")
?>

<main class="main">
    <h2><?= $title ?></h2>
    <p>Här bygger vi kod för att träna på PHP och dess olika konstruktioner som skall hjälpa oss att generera webbsidor.</p>

    <?php include("../view/php/hello.php") ?>
    <hr>
    <?php include("../view/php/values.php") ?>
    <hr>
    <?php include("../view/php/dates.php") ?>
    <hr>
    <?php include("../view/php/fredagtest.php") ?>


</main>
<?php include("../view/footer.php") ?>