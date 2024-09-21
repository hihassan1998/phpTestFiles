<?php
// Integer
$age = 42;
$birthDay = 7;
$birthMonth = 3;

// Extract the year only
$currentYear = date('Y');
// Calculate the birth year from the age
$birthYear = $currentYear - $age;

?>

<h4>Age calculation:</h4>
<p>
    Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?
</p>
<p>
    Han föddes <?= $birthYear ?>.
</p>