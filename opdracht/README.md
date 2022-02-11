# PHP-Advanced-Eindtaak

## Titel

> ## Eindtaak PHP-Advanced

In deze eindtaak krijgen jullie een opdracht met technieken die in de verschillende delen van PHP Advanced zijn behandeld. Niet alle technieken komen aan bod, maar in ieder geval één belangrijke per subonderdeel. De onderdelen van deze module waren:

- Associatieve Array's
- Loops
    - while loop
    - for loop
    - foreach loop
- Form handling
    - POST
    - GET
- Functions 
    - met argumenten
    - return

## Uitleg

De opdracht is om een kleine pagina te maken met informatie over jezelf. Deze wordt op een mooie manier weergegeven op basis van een formulier waar je stylen kunt aangeven. Na versturing wordt het cv in een tweede scherm getoond.

Dus eerst zie je een formulier in je browser waarin je kunt instellen hoe de pagina over jezelf er uit komt te zien en na het versturen van dat formulier zie je jouw informatie.

De opdracht bestaat uit twee stappen. In de eerste stap (Opdracht 1) maak je al de gehele functionaliteit van de applicatie. In de tweede stap (opdracht 2) ga je aan de slag om dezelfde applicatie op een andere manier (met aangepaste code) uit te voeren.


## Leerdoelen

1. [ ] De student kan de verschillende behandelde PHP-technieken toepassen en combineren tot één geheel


## Opdracht 1

1. [ ] Maak twee bestanden aan, genaamd advanced-1.php en advanced-2.php
2. [ ] Plaats in beide bestanden standaard HTMLpagina code. Dit omdat beide bestanden als pagina in de browser moeten worden getoond
3. [ ] Maak in het bestand advanced-1.php een formulier aan waarin je de volgende input fields plaatst:
a. tekstkleur 
dit is een sellectbox die dmv een foreach loop wordt gemaakt van de volgende array:
~~~php
$kleuren = array("red", "blue", "green", "black", "brown")
~~~
b. achtergrondkleur van de pagina (maak ook hier gebruik van de array $kleuren)
c. tabel-border dikte
d. padding (in pixels voor de tabelcel)
4. een verstuurknop
4. [ ] De ingevoerde data van het formulier worden verstuurd (gePOST) naar het bestand advanced-2.php
5. [ ] In advanced-2.php maak je een associatieve array aan met gegevens over jezelf. Bijvoorbeeld: naam, leeftijd, muzieksmaak, woonplaats, sport, etc.
6. [ ] Met een foreach loop doorloop je deze gemaakte array en maak je hiervan een tabel
7. [ ] De stijl van deze tabel en inhoud wordt bepaald door de data die is verstuurd met het formulier in advanced-1.php
8. [ ] Als dit helemaal werkt ga je verder met de tweede opdracht. Dit is een uitbreiding van deze opdracht

## Opdracht 2

1. [ ] In opdracht 1 heb je een tabelgemaakt, waarbij in een foreach loop steeds een tabelrij werd gemaakt. Nu vervang je de code in de foreach loop met de aanroep van een functie met de naam maakRij()
2. [ ] In het bestand advanced-2.php maak je een functie met de naam maakRij die twee argumenten kan meekrijgen. In deze functie wordt de tabelrij geschreven die in opdracht 1 in de foreach loop stond
3. [ ] Binnen de foreach loop roep je de functie maakRij dus aan met twee argumenten die de key en de value zijn van de array met jouw gegevens

## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-ADVANCED/blob/master/opdracht/images/resultaat.png)

## Bronnen

> [W3 Schools - PHP Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
> [W3 Schools - PHP Loops foreach](https://www.w3schools.com/php/php_looping_foreach.asp)
> [W3 Schools - PHP Form handling](https://www.w3schools.com/php/php_forms.asp)
> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)
