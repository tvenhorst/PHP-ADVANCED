# PHP-Advanced-Loops-Taak-05

## Loops - Foreach deel3

## Uitleg

In de vorige taken ( Loops taak03 en taak04) hebben we gewerkt met foreach loops die door een indexed array heen gingen. Je kunt ook door een associatieve array heen gaan met een foreach loop.

Bij een simpele foreach loop krijgt een variabele (in dit geval $value) steeds de volgende waarde mee van de array.

Bijvoorbeeld:

```php
$dagen = array("maandag", "dinsadg", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");

foreach($dagen as $value){
    echo $value;
}

```

Hier krijgt bij iedere loop $value een andere waarde. Eerst 'maandag', daarna 'dinsdag', etc.

Bij een foreach loop die door een associatieve array heen gaat, wil je ook de beschrijvingsnaam gebruiken. De zogenaamde key. Voorbeeld:

```php

$lengte = array("Piet"=>188, "Els"=>168, "Muhammad"=>176);

```

Hier is Piet een 'key' en 187 een 'waarde'
key: Muhammad - waarde: 184
key: Els - waarde: 168

In onderstaande foreach loop worden zowel de 'key' als de 'waarde' gebruikt:

```php

<?php

$lengte = array("Piet"=>188, "Els"=>168, "Muhammad"=>176);

foreach($lengte as $key => $value) {
  echo "De lengte van $key is $value <br>";
}

?>
```

## Leerdoelen

1. [ ] De student kan een foreach loop maken die door een associatieve array heen loopt
2. [ ] De student kan met deze foreach loop de keys en values van een associatieve array op het scherm tonen

## Opdracht

1. [ ] Maak een bestand loops-foreach-deel3.php aan
2. [ ] Neem hierin de volgende associatieve array over:

```php

$student  = array(
  "voornaam"    => "Jan",
  "achternaam"  => "Janssen",
  "klas"        => "9A",
  "Leeftijd"    => 17,
  "Woonplaats"  => "Amstelveen"
);

```

3. [ ] Toon de keys en de values van de $student array op het scherm

## Eindresultaat

## Bronnen

> [W3 Schools - PHP Loops foreach](https://www.w3schools.com/php/php_looping_foreach.asp)




<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:42924849
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->