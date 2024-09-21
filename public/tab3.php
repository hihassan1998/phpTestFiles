<?php

include("../view/header.php");

$dayNum = date('N');
$dayStr = date('l');

// $dateStr = '2022-08-26';
// $timestamp = strtotime($dateStr);
// $dayNum = date('N', $timestamp);
// $dayStr = date('l', $timestamp);

$message = "Today it is $dayStr, it is NOT yet Friday!!! Carpe Diem.";

//Check if its friday, day 5 in the week
if ($dayNum == 5) {
    $message = "Hurray!!! Today it is $dayStr!! Carpe Diem!";
} elseif ($dayNum > 5) {
    // How many days left to Friday?
    $daysLeft = 7 - $dayNum + 5;
    $daysOver = 7 - $daysLeft;
    $message = "$message It was just Friday $daysOver days ago, but it will come again in $daysLeft days.";
} else {
    $message = "$message Horrayy Friday!!!";
}

?>
<main>

    <h3>Villkor med if sats</h3>
    <main>

        <p><?= $message ?></p>
    </main>
</main>

<?php
include("../view/footer.php");
?>