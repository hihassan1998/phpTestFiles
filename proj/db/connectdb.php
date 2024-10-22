<?php
//Report all types of errors
error_reporting(-1);

//Dispaly all errors
ini_set('display_errors', '1');


// Create a DSN for the user database using its filename
$fileName = "../db/bmo.sqlite"; // Adjust as necessary
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\bmo.sqlite";
}
$dsn = "sqlite:$fileName";

// echo getcwd();
// echo $dsn;

// Function to get the database connection
function connectToDb(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $_SESSION['db_message'] = "Connected to the database successfully";
    } catch (PDOException $e) {
        $_SESSION['db_message'] = "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }
    return $db;
}
