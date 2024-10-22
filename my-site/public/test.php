<?php

include("../config/config.php");
include("../view/header.php");

$title = "Test file";
$message = "Hej Världen!";
$name = "Mikael";
$city = "Bankeryd";
$message2 = "Defined message (**Tips: remove in code to test  'felutskrifter')";
// Integer
$age = 42;
$birthDay = 7;
$birthMonth = 3;

?>
<h2><?= $title ?></h2>
<main>

    <h2> Hello World</h2>
    <p>
        PHP säger: <strong><?= $message ?></strong>
        <hr>
        PHP säger: <strong><?= $message2 ?></strong>
        <hr>
    </p>
    <p>
        Jag har hört talas om <strong> <?= $name ?></strong> som bor i <strong> <?= $city ?></strong>. Vet du vem det är?
    </p>
    <hr>

    <p>
        Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?
    </p>
</main>
<?php include("../view/footer.php") ?>