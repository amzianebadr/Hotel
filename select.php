<?php
require("db.php");

$sql = "SELECT * FROM reservation ORDER BY id DESC";
$stmt = $db->prepare($sql);
$stmt->execute();
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>code</th>
        <th>nom</th>
        <th>telephone</th>
        <th>arrivee</th>
        <th>depart</th>
        <th>type</th>
        <th>action</th>
    </tr>

<?php foreach ($reservations as $r) { ?>
<tr>
    <td><?= $r["id"] ?></td>
    <td><?= $r["code_reservation"] ?></td>
    <td><?= $r["nom_client"] ?></td>
    <td><?= $r["telephone"] ?></td>
    <td><?= $r["date_arrivee"] ?></td>
    <td><?= $r["date_depart"] ?></td>
    <td><?= $r["type_chambre"] ?></td>
    <td>
        <a href="edit.php?id=<?= $r["id"] ?>"> Edit</a> |
        <a href="delete.php?id=<?= $r["id"] ?>" 
           onclick="return confirm(' Are you sure you want to cancel this reservation?')">
           🗑️ Delete
        </a>
    </td>
</tr>
<?php } ?>
</table>
