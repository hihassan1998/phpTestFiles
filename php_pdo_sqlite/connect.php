<?php
// Create a DSN for the database using its filename
// Create a DSN for the database using its filename
$fileName = "db/db.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\db.sqlite";
}
$dsn = "sqlite:$fileName";

// Open the database file and set some attributes on interface
// and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
    throw $e;
}

// Print out the success
echo "<p>The database at '$dsn' is now connected.<p>Dumping the database connection:<pre>";
var_dump($db);

/**
 * Exception handler to print out a HTML message with details on the exception,
 * useful to deal with uncaught exceptions.
 *
 * @return object as the database connection object.
 */
function connectToDatabase(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }

    return $db;
}
// 1 ref inuse in safeSelect.php