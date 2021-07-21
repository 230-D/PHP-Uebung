<?php

echo ("<h4>Uebung Baum</h4>");

/* 
                    Uebung Baum
Nachdem ein Baum gefällt und der Stamm aufgearbeitet wurde, 
möchte man in der Holzwirtschaft wissen, wie viel Holz der Stamm hat 
(Volumen in Festmeter).

Schreibe ein Programm (index.php), welches das Volumen eines Baumstamms berechnet. 
In PHP gibt es eine mathematische Funktion für PI pi()

Holzstamm => Zylinder

Umrechnung Volumen

*/

$grF = 5;
$hoehe = 1;
$vol = $grF * $hoehe;

switch ($vol) {
    case ($vol):
        'Der Baumstamm hat einen Volumen von $vol .';
        break;
    
    default:
        'Das Volumen des Baumstammes ist unbekannt.';
        break;
}


// Korrektur Volumen in m3 = PI radius2 hoehe

echo ("<br>");

$height = 10;
$radius = 5;

// $volume = pi() * pow($radius, 2) * height; // 785

$volume = pi() * $radius * $radius * $height; // 785

echo "Volumen betraegt: $volume m3";

echo ("<h4>Uebung Koerperoberflaeche</h4>");

/* 
                    Uebung Koerperoberflaeche

Die Körperoberfläche eines Menschen wird nach der Formel von 
Mosteller wie folgt errechnet:
         ____
      	/ h * w
KOF= \_/ -----
	  3600

h ist die Körperhöhe in cm
w  ist das Körpergewicht in kg
Das Ergebnis ist die Körperoberfläche in m2

Schreibe ein Programm, das die Körperoberfläche nach der Formel von 
Mosteller in m2 berechnet.

Die Person ist 1,80m groß und wiegt 58kg.

Tipp: Zum Wurzelziehen kannst du die Funktion sqrt() verwenden.
Siehe: https://www.php.net/manual/de/function.sqrt.php

*/
/*
$h = 180;
$w = 58;



echo ("<br>");

echo sqrt(3600)/();




$kof = sqrt(3600)/($h * $w);

echo "Die Koerperoberflaeche betraegt: $kof m2";

echo $kof;
echo ("<br>");

echo "Die Koerperoberflaeche betraegt: $kof m2";
*/

echo ("<br>");

// Korrektur

// Variablen

$h = 180;
$w = 58;

// Rechnung

// $kof = sqrt(($h * $w) / 3600);

// Oder Alternative Rechnung

$a = $h * $w / 3600;
$kof = sqrt($a);



// Ausgabe 

echo "Die Person hat eine Koerperoberflaeche von $kof m2.";


echo ("<h4>Uebung Maximum berechnen</h4>");

/** 
 *                      Uebung Maximum berechnen
 * 
 * Das Maximum bestimmt die größte Zahl aus einer Auswahl von vorliegenden Zahlen. Zur Ermittlung des
 * Maximums gibt es in den gängigen Programmiersprachen eine Funktion.
 * 
 * Wir wollen uns die Logik selber schreiben.
 * 
 * Schreibe ein Programm, welches das Maximum von drei Variablen bestimmt und ausgibt. Benutze
 * ausschließlich if und else Anweisungen sowie den > -Operator.
 * 
 */

 // Variablen deklarieren und initialisieren
 $a = 42;//1;
 $b = 30;//2;
 $c = 3; //3;

 // Variable die den Maximalwert haben soll.
 $maximum = -2147483648;

 // Maximum bestimmen

/*

if($maximum <= $a && $b && $c)
{
    echo $maximum;
}
*/


// Korrektur

// Maximum bestimmen

if ($a > $b) 
{
   if ($a > $c) 
   {
        $maximum = $a;
   } 
   else 
   {
        $maximum = $c;
   }
}
else 
{
    if ($b > $c) {
        $maximum = $b;
    }
    else 
    {
        $maximum = $c;
    }
}

// Ausgabe

echo "Der groeßte Wert in der Menge $a, $b, $c lautet: $maximum";



echo ("<h5>Uebung Maximum berechnen</h5>");

/*
In dieser Aufgabe wollen wir die Summe von aufeinanderfolgenden Zahlen berechnen.
* Da dies mit dem Taschenrechner ein sehr großer Tippaufwand wäre, stellt sich die Frage:
* Warum wollen wir das nicht einfach den Computer erledigen lassen?
*
* Schreibe ein Programm, das mit einer for-Schleife die Summe der Zahlen von 3 bis 27 berechnet.
*
* Gebe das Ergebnis aus.

*/


// Summe berechnen



$summe = 0;                     // Setze Variable Summe 0

for ($i=3; $i <= 27; $i++)      // Solange i=3: i <= 29; i++
{
    $summe = $summe + $i;       // addiere Summe + i
}

echo "Die Summe ist: $summe" . "<br>";          // Gebe Summe aus



