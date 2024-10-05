<?php
// Define the path to your SQLite database
$dbPath = 'db/testdata.sqlite';

// Create a connection to the database
try {
    $db = new PDO("sqlite:$dbPath");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Prepare the SQL query to select users under 30
$sql = "SELECT * FROM example_table WHERE age < 30";
$stmt = $db->prepare($sql);
$stmt->execute();

// Fetch all results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file if needed -->
</head>
<body>
    <h1>User Details (Age under 30)</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php if ($results): ?>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No users found under 30.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

