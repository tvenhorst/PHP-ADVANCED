<?php

$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
  foreach($student as $key => $value) {
    echo "<option value='$key'>$key</option>";
    echo "<option value='$value'>$value</option>";
  }

  
?>