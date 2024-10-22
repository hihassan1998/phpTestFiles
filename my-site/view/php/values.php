<?php

include("../config/config.php");


// Float/double
$radius = 7.0;
$pi = 3.14159;

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;

// Format number for output
$formattedRadius = number_format($radius, 1);
$formattedCircumference = number_format($circumference, 2);
$formattedArea = number_format($area, 2);

?>

<h3>Variables and types:</h3>
<p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.
</p>
<p>
    Cirkelns radie är <?= $formattedRadius ?> enheter, dess omkrets är <?= $formattedCircumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat.
</p>