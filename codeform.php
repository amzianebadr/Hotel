<?php
require("db.php");

if (isset($_POST["Reservation"])) {

    $Code      = $_POST["Code"];
    $Nom       = $_POST["Nom"];
    $Telephone = $_POST["Telephone"];
    $Date      = $_POST["Date"];
    $Depart    = $_POST["depart"];
    $Type      = $_POST["type"];

    try {
        $sql = "INSERT INTO reservation
        (code_reservation, nom_client, telephone, date_arrivee, date_depart, type_chambre)
        VALUES (:code, :nom, :telephone, :date, :depart, :type)";

        $insert = $db->prepare($sql);

        $insert->bindParam(":code", $Code);
        $insert->bindParam(":nom", $Nom);
        $insert->bindParam(":telephone", $Telephone);
        $insert->bindParam(":date", $Date);
        $insert->bindParam(":depart", $Depart);
        $insert->bindParam(":type", $Type);

        $insert->execute();

        header("Location:formRese.php?rese=1");
        exit;

    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
?>
