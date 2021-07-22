<?php

/** Rückwärtsausgabe
 * 
 * Schreibe eine Funktion die die Elemente eines Arrays in umgekehrter
 * Reihenfolge ausgibt.
 * 
 * Tipps: Zähle die Elemente des Arrys, Schreibe eine Schleife die
 * Rückwärts itteriert.
 */



 // Array initialisierung
$test = array('H', 'a', 'l', 'l', 'o');



function ruearray($param)
{
    // Zaehle alle Elemente im Array
    $arrayLength = count($param);

    // Schleife (Startvariable = Elemente -1 fuer letzten Index;groeßer gleich 0; runterzaehlen)
    for ($i=$arrayLength -1; $i >= 0 ; $i--) { 

    // Ausgabe aktuelle Position der Schleife im Array    
        echo $param[$i];
    }
}

// Funktionsaufruf
ruearray ($test);

/*
    array
        1.element // index 0
        2.element // index 1
        3.element // index 2
*/

