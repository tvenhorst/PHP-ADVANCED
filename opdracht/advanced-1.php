<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form name="Forum" method="POST" action="advanced-2.php">
    
<!-- dit is de checkbox -->
    <p>tabel-border<br> <input name="tabel-border" type="number"></p>
    <p>padding<br> <input name="padding" type="number"></p>
    

<!-- hier word de achtergrondkleur veranderd door je aangegeven kleur -->
<p>Achtergrondkleur<br>
    <select id="achtergrond kleur" name="achtergrond"></p>

        <?php 

        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }

        ?>

    </select></p>
<!-- hier word de tekskleur veranderd door de aangegeven kleur -->
<p>Tekstkleur<br>
    <select id="kleur" name="tekst"></p>

      <?php

        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }

      ?>

    </select></p>

<br>
<button type="submit">Send</button>

</form>

</body>
</html>