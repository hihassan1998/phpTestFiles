<?php

include("../view/header.php");
// Hämta dagens datum eller datum från query string (om angett)
$today = isset($_GET['date']) ? new DateTime($_GET['date']) : new DateTime();

// Hämta dagens veckodag (0 = Söndag, 1 = Måndag, ... , 5 = Fredag)
$dayOfWeek = $today->format('w');

// Definiera galen styling med CSS
$styles = "
    <style>
        body {
            background-color: #ff00ff;
            color: #00ff00;
            font-family: 'Comic Sans MS', sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 50px;
            animation: spin 10s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .crazy-images {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .crazy-images img {
            margin: 0 15px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            transition: transform 0.5s;
        }
        .crazy-images img:hover {
            transform: scale(1.5);
        }
        form {
            margin-top: 30px;
        }
        input[type='date'] {
            padding: 10px;
            font-size: 18px;
        }
        input[type='submit'] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #00ff00;
            color: #ff00ff;
            border: none;
            cursor: pointer;
        }
    </style>
";

// HTML-uppbyggnad
echo $styles;


// Kontrollera om det är fredag
if ($dayOfWeek == 5) {
    echo "<h1>Det är fredag idag!</h1>";
    echo "<div class='crazy-images'>
            <img src='https://example.com/crazy1.jpg' alt='Crazy Image 1'>
            <img src='https://example.com/crazy2.jpg' alt='Crazy Image 2'>
            <img src='https://example.com/crazy3.jpg' alt='Crazy Image 3'>
          </div>";
    echo "<video width='320' height='240' autoplay loop>
            <source src='https://example.com/crazy-video.mp4' type='video/mp4'>
            Your browser does not support the video tag.
          </video>";
} else {
    // Beräkna hur många dagar det är till fredag
    $daysUntilFriday = (5 - $dayOfWeek + 7) % 7;
    if ($daysUntilFriday == 0) {
        $daysUntilFriday = 7; // Om vi är på en fredag, visa 7 dagar tills nästa
    }
    echo "<h1>Det är inte fredag idag. Det är $daysUntilFriday dagar kvar till fredag!</h1>";
}

// Lägg till ett formulär för att kontrollera andra datum

$title = "Fredagssidan"
?>
<main class="container">
    <form method='get'>
        <label for='date'>Testa ett datum:</label><br>
        <input type='date' name='date' id='date' required>
        <input type='submit' value='Kolla om det är fredag!'>
    </form>
</main>
<?php
include("../view/footer.php");
?>