<!DOCTYPE html>
<html lang="en">
<body>
<form action="../taak02/mijngegevens.php" method="post">
      Voornaam: <input type="text" name="voornaam"><br><br>
      Achternaam: <input type="text" name="achternaam"><br><br>
      Klas: <input type="text" name="klas"><br><br>
      Leeftijd: <input type="text" name="leeftijd"><br><br>
      Adres: <input type="text" name="adres"><br><br>
      Plaatsnaam: <input type="text" name="plaatsnaam"><br><br>
      favoriete muziekband: <input type="text" name="favorietemuziekband"><br><br>

  <label>Geslacht</label> <br>

  <input type="radio" id="man" name="gender" value="Man">
  <label for="Man">Man</label>

  <input type="radio" id="vrouw" name="gender" value="Vrouw">
  <label for="Vrouw">Vrouw</label> <br><br>


  <select name="kleur" id="kleuren" action="../taak02/mijngegevens.php"> <br>

  <?php
      $kleuren = ['blue' , 'red' , 'yellow' , 'green' , 'purple'];
      foreach($kleuren as $kleur){ 
        echo "<option value= '$kleur'selected>$kleur</option>";
      }    
  ?>
          </select>  
  <input type="submit" value="Verstuur">
</form>



        
</body>
</html>