<?php
require("db.php");

$sql = "SELECT * FROM reservation ORDER BY id DESC";
$stmt = $db->prepare($sql);
$stmt->execute();
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
<head>
   <style>
    /* Page */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    padding: 20px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
}

th {
    background-color: #2c3e50;
    color: #fff;
    padding: 10px;
}

td {
    padding: 8px;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #eaf2f8;
}

/* Buttons */
.btn {
    padding: 6px 14px;
    text-decoration: none;
    font-size: 14px;
    border-radius: 6px;
    color: #fff;
    margin: 2px;
    display: inline-block;
    transition: 0.3s ease;
}

.btn-edit {
    background-color: #3498db;
}

.btn-edit:hover {
    background-color: #2980b9;
}

.btn-delete {
    background-color: #e74c3c;
}

.btn-delete:hover {
    background-color: #c0392b;
}


   </style> 
</head>
 <body>
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
 <a href="edit.php?id=<?= $r["id"] ?>" class="btn btn-edit">Edit</a>
<a href="delete.php?id=<?= $r["id"] ?>" class="btn btn-delete">Delete</a>
  
    </td>
</tr>
<?php } ?>
</table> 

 </body>
 
