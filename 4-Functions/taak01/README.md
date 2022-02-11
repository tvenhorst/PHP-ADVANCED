# PHP-Advanced-Functions-Taak-01


## Functions met argumenten deel 1


## Uitleg

In de module PHP Basic is er een introductie geweest over het gebruik van functies in PHP. Dit waren functies die konden worden aangeroepen met de functienaam en twee haakjes. 

Een voorbeeld hiervan is:

~~~php
<?php

function schrijfNaam() {

  echo "Mijn naam is Bert";

}


// de functie uit laten voeren:

schrijfNaam();

?>
~~~


Iedere keer dat je deze functie aanroept, gebeurt er hetzelfde. Er wordt naar het scherm geschreven “Mijn naam is Bert”;

Je kunt functies ook ‘slimmer’ maken, door ze extra informatie mee te geven. Zogenaamde parameters. Dit is te zien als een variabele, die binnen de functie kan worden gebruikt.

Voorbeeld:

~~~php
<?php

function schrijfNaam($naam) {

  echo "Mijn naam is $naam";

}

// de functie uit laten voeren:
schrijfNaam(“Bert”);

?>
~~~

Op deze manier kun je de functie schrijfNaam dus gebruiken voor vele namen. Als je een andere naam wilt tonen op het scherm, roep je dezelfde functie aan met een andere naam:



~~~php
<?php

schrijfNaam(“Bert”);

schrijfNaam(“Mohammed”);

schrijfNaam(“Lisa”);

?>
~~~


## Leerdoelen

1. [ ] Herhaling begrip en gebruik functions algemeen
2. [ ] De student weet wat een argument is bij een functie
3. [ ] De student kan een functie opstellen waarin een argument wordt meegegeven
4. [ ] De student kan een functie aanroepen met het gebruik van een argument


## Opdracht


1. [ ] Maak een nieuw bestand genaamd functies-1.php en zet daar de basis HTML code in voor een pagina
2. [ ] Maak een PHP functie genaamd 'schrijfKleur' die een argument mee kan krijgen
3. [ ] Het argument dat meegegeven wordt is een string dat als een color-style kan worden gebruikt. Bijvoorbeeld 'rood' of '#FF0000'
4. [ ] Zorg er voor dat als de functie wordt aangeroepen met de kleur als argument, een tekst naar het scherm wordt geschreven in de meegegeven kleur. Dus iets als 'Deze tekst is in de kleur red', waarbij de tekst ook in het rood staat.
5. [ ] Roep de functie vier keer aan met steeds een andere kleur

## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-ADVANCED/blob/master/4-Functions/taak01/images/resultaat.png)

## Bronnen

> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)




<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:18010909
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->