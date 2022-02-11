# PHP-ADVANCED - ARRAYS

## Taak 01 - Associatieve Arrays

## Uitleg

Hieronder volgt een uitleg over associatieve array's. Hierover is ook een video gemaakt. Deze kun je bekijken via:

[Uitleg video](https://web.microsoftstream.com/video/25e19156-d010-46f4-a275-d94b8db2ec4c)

In PHP-Basic hebben we al kennis gemaakt met numerieke array's. Dit zijn array's waarbij elke waarde van de array is aan te roepen met een getal. Bijvoorbeeld:

```php
$studenten = array("Piet", "Muhammad", "Els");
```

Als we de naam Muhammad willen tonen op het scherm, zouden we dat als volgt kunnen doen: (let op: een numerieke array begint bij het getal 0):

```php
echo $studenten[1];
```

Een associative array gebruikt geen getallen maar relevante woorden. Bijvoorbeeld:

```php
$lengte['Piet'] = 187;
$lengte['Muhammad'] = 184;
$lengte['Els'] = 168;
```

Als we de lengte van Els zouden willen tonen in een zin, zouden we dit als volgt kunnen doen:

```php
echo "De lengte van Els is ". $lengte['Els'] . " centimeter";
```

Een andere manier om dezelfde array te vullen is als volgt:

```php
$lengte = array("Piet"=>187, "Muhammad"=>184, "Els"=>168);

```

## Leerdoelen

1. Ik weet het verschil tussen een numerieke- en een associative array
2. Ik kan een associative array aanmaken en vullen
3. Ik kan een associative array gebruiken om iets op een scherm te tonen

## Opdracht

Voor één van de studenten toon je de gegevens van de array op het scherm.

## Eindresultaat

Gegevens Muhammad:
Voornaam: Muhammad
Achternaam: Ali
Leeftijd: 17
Klas: 9G

## Bronnen

Een lijstje van links naar externe bronnen

>[W3 Schools - PHP Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
