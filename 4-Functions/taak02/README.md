# PHP-Advanced-Functions-Taak-02


## Functions met argumenten deel 2


## Uitleg

In de vorige taak (taak01 van het onderdeel functions) is het principe van argumenten geintroduceerd. We hebben toen geleerd dat je bij het aanroepen van een functie een argument (variabele) kunt meegeven die je in de functie kunt gebruiken.

Voorbeeld hiervan was:

~~~php
<?php

function schrijfNaam($naam) {

  echo "Mijn naam is $naam";

}

// de functie uit laten voeren:
schrijfNaam(“Bert”);

?>
~~~


In het voorbeeld hierboven gaven we één argument mee ($naam). Het is ook mogelijk om meerdere argumenten mee te geven. Je kunt dit doen door de argumenten met een komma te scheiden. 

Zelfde voorbeeld maar dan met meer argumenten:

~~~php
<?php

function schrijfNaam($voornaam, $achternaam, $klas) {

  echo "Mijn naam is $voornaam $achternaam en ik zit in klas $klas";

}

// de functie uit laten voeren:
schrijfNaam(“Bert”, “Pietersen”, “9G”);

?>
~~~

Je kunt in plaats van strings ook variabelen gebruiken bij de aanroep. Bovenstaande functie wordt in dat geval op de volgende manier aangeroepen:

~~~php

$voornaam = “Bert”;
$achternaam = “Pietersen”;
$voornaam = “9G”;


// de functie uit laten voeren:
schrijfNaam($voornaam, $achternaam, $klas);

~~~

Behalve het binnen een functie direct iets te laten uitvoeren, zoals iets naar een scherm schrijven met een echo, is het ook mogelijk een functie te gebruiken om iets ‘terug te geven’. Bijvoorbeeld iets in een variabele te stoppen. 

Het teruggeven wordt gedaan met het commando ‘return’. Hiermee is het mogelijk om de uitkomst van een functie (de return) in een variabele te stoppen. Of direct te echo-en.

Stel je wilt een voornaam en een achternaam op een nette manier (met een spatie ertussen) in een variabele stoppen, zou je dat zo kunnen doen:

~~~php

<?php

function maakNaam($voornaam, $achternaam) {

	$heleNaam = $voornaam . " " . $achternaam;
  
	return $heleNaam;

}

// de functie uit laten voeren:

$voorAchternaam = maakNaam("Bert", "Pietersen");

echo $voorAchternaam;


?>

~~~

Ook zou je bijvoorbeeld direct kunnen echo-en met hetgeen wordt ge-returnd. In dat geval zou je de functie als volgt kunnen aanroepen:

~~~php

maakNaam("Bert", "Pietersen");

~~~



## Leerdoelen

1. [ ] De student weet hoe je meerdere argumenten mee kan geven aan een PHP functie
2. [ ] De student kan een functie aanroepen met meerdere argumenten
3. [ ] De student weet wat het commando 'return' doet binnen een functie
4. [ ] De student kan een functie aanroepen met als doel dat iets met een return wordt teruggegeven


## Opdracht


1. [ ] Maak een nieuw bestand genaamd functies-2.php en zet daar de basis HTML code in voor een pagina
2. [ ] Maak een PHP functie genaamd 'rekenUit' die drie argumenten mee kan krijgen
3. [ ] Zorg er voor dat de waarden van de drie argumenten bij elkaar worden opgeteld en de uitkomst met het commando 'return' wordt teruggegeven
4. [ ] Verwerk de uitkomst door een regel tekst naar het scherm te schrijven. Bijvoorbeeld "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst 15"
5. [ ] Roep de functie 3 keer aan met verschillende getallen als argumenten

Tip: Let er op je gebruik van quotes bij het meegeven van de argumenten. Een getal wordt niet meegegeven als een string! Moet een getal dan tussen quotes staan bij het meegeven als argument??


## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-ADVANCED/blob/master/4-Functions/taak02/images/resultaat.png)

## Bronnen

> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)



<!--- ------------ DIT COMMENTAAR LATEN STAAN AUB ------------
------------------ ------------------------------ ------------
------------------ eagle ref:270948
------------------ ------------------------------ ------------
------------------ DIT COMMENTAAR LATEN STAAN AUB -------- -->