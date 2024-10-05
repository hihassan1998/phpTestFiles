<?php // Get the resultset and print it out
$res = $stmt->fetchAll();
?>

<style>
    table,
    th,
    td {
        border: 2px solid black;
        padding: 10px;
        background-color: beige;
    }
</style>
<table>
    <tr>
        <th>Id</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
    </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td><?= $row['rowid'] ?></td>
            <td><?= $row['namn'] ?></td>
            <td><?= $row['datum'] ?></td>
            <td><?= $row['namnlangd'] ?></td>
        </tr>
    <?php endforeach ?>