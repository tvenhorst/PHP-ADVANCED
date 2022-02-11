# PHP-ADVANCED - LOOPS

## Taak 01 - For loop

## Uitleg

Loops is een manier om 1 of meerdere regels PHPcode meerdere keren te laten uitvoeren. We behandelen in PHP Advanced in verschillende taken verschillende soorten loops.

In deze taak wordt de for loop behandeld. In onderstaande powerpoint staat een uitleg over de for-loop. Wil je meer weten over wat een loop precies is, dan wordt aangeraden eerst de video uit de vorige taak te bekijken.

Bekijk de powerpoint met de uitleg over de for-loop:
[Powerpoint](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-ADVANCED/blob/master/2-Loops/taak02/images/php-loops-for.pdf)

Een for-loop ziet er zo uit:

```php
    for($x = 0 ; $x < 10; $x++){
        echo $x;
    }
```

Een for-loop is een loop met niet alleen een voorwaarde zoals bij een while-loop maar deze heeft ook een startpunt van `$x` en ook hoe `$x` wordt opgeteld. (in bovenstaand voorbeeld steeds +1)

Met onderstaand resultaat:

![For-loop](images/loop.png)

Zo pak je een for-loop aan:

![for-loop-gif](images/for-loop.gif)

## Leerdoelen

1. [ ] De student weet wat een loop is algemeen
2. [ ] De student weet wat een for loop is en weet wat de onderdelen van de syntax zijn
3. [ ] De student weet wanneer je kiest voor een for loop
4. [ ] De student kan zelf een for loop gebruiken in php

## Opdracht

Deze opdracht is een variatie van de opdracht in Loops taak01. Het resultaat is hetzelfde. Toch is de code die je moet schrijven voor een groot deel anders!

1. [ ] Maak een bestand loops-for.php aan
2. [ ] maak hierin een for loop die een beginwaarde 0 heeft, die als conditie heeft dat de loopvariabele kleiner moet zijn dan 18 en die de loopvariabele steeds met 1 ophoogt. De loop wordt dus 18 keer doorlopen!
3. [ ] Iedere keer dat de loop wordt doorlopen wordt er een echo gegeven met de tekst "Ik ben x jaar, dus ik mag nog niet stemmen", waarbij x de waarde heeft van de variabele leeftijd
4. [ ] Onder de for loop wordt de tekst op het scherm getoond: "Ik ben 18 jaar oud dus ik heb stemrecht!"
5. [ ] Breid de opdracht uit door er voor te zorgen dat de regels die op het scherm worden getoond in een (unorderd HTML) list.

## Eindresultaat

![Eindresultaat](images/resultaat.png)

## Bronnen

> [W3 Schools - PHP Loops FOR](https://www.w3schools.com/php/php_looping_for.asp)
