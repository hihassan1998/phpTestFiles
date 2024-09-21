<?php

include("../view/header.php");

$radius = 7.0;
$pi = 3.14159;

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;
?>

<main>
    <h1>Calculating result of problem:</h1>
<p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.
</p>
</main>

<?php
include("../view/footer.php");
?>