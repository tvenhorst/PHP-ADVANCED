# PHP-ADVANCED - ARRAYS

## Taak 02 - Associatieve Arrays

## Uitleg

Een associatieve array bestaat uit een __keys__ en een __values__.

```php
$persoon["voornaam"]   = "Marc";
$persoon["achternaam"] = "Overmars";
$persoon["club"]       = "Ajax";
$persoon["leeftijd"]   = 49;
```

In bovenstaand voorbeeld zijn

- __de keys__  : `voornaam`, `achternaam`, `club`, `leeftijd`
- __de values__: `Marc`, `Overmars`, `Ajax`, `49`

Om een bepaalde value (waarde) te tonen op het scherm heb je dus een key (sleutel) nodig. Net als bij een kluisje op school.

Als je bijvoorbeeld de volgende zin op het scherm wilt tonen
> "Marc Overmars is al jaren actief bij Ajax"

```php
<?php
echo  "$persoon['voornaam'] $persoon['achternaam'] is al jaren actief bij Ajax.";
?>
```

of je doet het zo:

```php
<?php
echo  $persoon['voornaam']. " " .  $persoon['achternaam'] . " is al jaren actief bij Ajax.";
?>
```

Als we nu de array aanpassen in bijvoorbeeld:

```php
$persoon["voornaam"]   = "Edwin";
$persoon["achternaam"] = "Van der Sar";
$persoon["club"]       = "Ajax";
$persoon["leeftijd"]   = 51;
```

Dan verandert direct ook de uitkomst van de zin.

> "Edwin Van der Sar is al jaren actief bij Ajax"

## Leerdoelen

1. Ik weet het verschil tussen een numerieke- en een associative array
2. Ik kan een associative array aanmaken en vullen
3. Ik kan een associative array gebruiken om iets op een scherm te tonen

## Opdracht

Maak met de onderstaande __keys__ een $persoon array, zoals hierboven, een array over jezelf. Toon de waardes in Nederlandse zin op het scherm:

De keys

- voornaam
- achternaam
- leeftijd
- opleiding

## Eindresultaat

> Willem Alexander van Oranje is 53 jaar oud en is student aan het ROC van Amsterdam aan de opleiding Software Ontwikkeling.

## Bronnen

Een lijstje van links naar externe bronnen

>[W3 Schools - PHP Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
>[Geeksforgeeks.org - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
