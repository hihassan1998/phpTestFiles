<?php
/*
*Start
* Start by connecting to the db and use function saved in connect.php to connect
*/

// Include the connection script
require 'connect.php';

// Use the connectToDatabase function to establish a connection
$db = connectToDatabase($dsn);

/*
*End
*/

// PHP injections safty




// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = ?
    OR namn = ?
    OR namn = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = ['Mikael', 'Magnus', 'Carina'];
$stmt->execute($args);

// Get the resultset and print it out
$res = $stmt->fetchAll();
echo "<pre>", print_r($res, true), "</pre>";

?>