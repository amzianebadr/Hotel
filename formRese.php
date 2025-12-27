 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="codeform.php" method="POST">
        <div>
         <label for="Code">Code raservation : </label>
        <input type="text" name="Code" id="Code" required>

          <label for="Nom">Nom Client :</label>
        <input type="text" name="Nom" id="Nom">  
        </div>

        <div>
        <label for="telephone">Tel :</label>
        <input type="text" name="Telephone" id="Telephone" required>

        <label for="Date">Date arrivee</label>
        <input type="date" name="Date" id="Date"> 
        </div>

        <div>
        <label for="depart">Date depart </label>
        <input type="date" name="depart" id="depart">

        <label for="type">type chambre</label>
        <input type="text" name="type" id="type"> 
        </div>
        <input type="submit" value="Reservation" name="Reservation">

         <?php
         if(isset($_GET["rese"])){
            echo"  hahahahahahahahahahahahah reservation";
         }
         ?>
      
    </form>
</body>
</html>