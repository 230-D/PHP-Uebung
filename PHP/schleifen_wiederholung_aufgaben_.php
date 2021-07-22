<?php

/** Wiederholung Schleifen
 * 
 * Es gibt kopf- und fußgesteuerte Schleifen
 * 
 * Zu den kopfgesteuerten Schleifen zählen:
 * - for
 * - while
 * - foreach
 * 
 * do ... while ist eine fußgesteuerte Schleife.
 */


// Schreibe eine for-Schleife die von 0 bis 100 zählt und die aktuelle Itteration
// untereinander ausgibt.


/*

for ($i=0; $i <= 100; $i++)
{
    echo $i . '<br>';           // alternativ: echo "$i <br>"; 
                              // Single '' Quotes werden alle Daten zu Strings
}                           // Double "" Quotes werden bestimmte Daten zu Strings
*/

 // Schreibe eine while-Schleife die von 50 bis -50 zählt und die aktuelle Itteration
 // untereinander ausgibt.

/*
$i= 50;

while ($i >= -50)
{
    echo $i-- . '<br>';
}
*/



 // Schreibe eine foreach-Schleife die ein assoziatives Array mit key und value untereinander ausgibt.
 // Verwende single-quotes im echo-statement.

/*
$Fahrray =
[
    'Fahrrad1' => 1800,         // => lautet Fieldarrow
    'Fahrrad2' => 2000,
    'Fahrrad3' => 500,
    'Fahrrad4' => 800
];

foreach ($Fahrray as $key => $value) {
    echo $key .' '. $value;
    echo '<br>';
}

*/

 // Schreibe eine do...while-Schleife die von 0 bis 19 alles Zahlen untereinander ausgibt.
 // Verwende in der Bedingung nur den kleiner-als-Operator

 /*
$i=0;

do {
    echo $i++ . '<br>';
} while ($i < 20);


*/

/*      Alternativ

$a


*/



 // Push dieses File in dein GitHub-Repository