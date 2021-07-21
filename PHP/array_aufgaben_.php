<?php

/**
 * Allgemeine Aufgaben zu Arrays
 * 
 * Situation: Du weißt nicht viel über die Rückgabe einer Funktion und vermutest,
 * dass es meist ein Array ist, von welchem du Informationen benötigst. Nachdem du festgestellt hast,
 * dass es sich um ein Array handelt, möchtest du verschiedene Funktionen aufrufen, um mit dem Array zu
 * arbeiten.
 * 
 * PHP bietet einige Funktionen mit deren Hilfe du an die Information kommst, die du benötigst.
 * Suche in der PHP Dokumentation nach Funktionen für folgende Fälle (und probiere die Funktionen aus).
 */


 // Initialisiere ein Array
 $auto = 
 [
     'BMW',
     'VW',
     'Porsche',
     'Renault',
     'Mercedes'
 
 ];

// 1) Du möchtest wissen, wie viele Indizes ein Array besitzt.

/*

echo '<pre>';
var_dump($auto);
echo '</pre>';

*/

// Korrektur

//echo count($auto);


// 2) Mit welcher Funktion kannst du feststellen, ob ein Array definiert ist?

/*

$auto = [];         // $auto= ['BMW', 'VW']

var_dump(empty($auto));

*/

// Korrektur

// echo isset($auto);




// 3) Wie kannst du prüfen, ob ein Array leer (true) ist oder Elemente (false) besitzt?

/*                                    NOT CORRECT

$auto=['BWM', 'VW'];

if ($auto)
{
    var_dump($auto);
}else (isset($auto))
{
    var_dump($auto);
}

*/

// Korrektur


// echo empty($auto);
/*
function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}

ausgabeFormatiert(empty($auto));
*/

// 4a) Mit welcher Funktion kannst du prüfen, ob es sich um ein Array handelt?

/*
function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}

echo is_array($auto);
ausgabeFormatiert(is_array($auto));
*/


// 4b) Existiert ein Array nicht, erhältst du in Aufgabe 4a eine Warnung. Verbinde die Funktion 4a mit einer Überprüfung, ob die Variable überhaupt existiert

/*

function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}



if (isset($auto))
{
    if (is_array($auto))
    {
     echo "Ja, ein Array";   
        
    }else 
        {
        echo "kein Array";
        }
}else 
{
    echo "keine Variable mit diesem Bezeihner vorhanden";
}

*/


// 5) Entwickle für Aufgabe 4a und 4b eine Funktion.

/*
function checkArray($param)

if (isset($param))
{
    if (is_array($param))
    {
     echo "Ja, ein Array";
    }else 
    {
        echo "kein Array";
    }
}else 
{
    echo "keine Variable mit diesem Bezeihner vorhanden";
}

checkArray($auto);

*/


// 6) Mit welcher Funktion kannst du das letzte Element eines Arrays löschen?

/*

function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}


ausgabeFormatiert($auto);
array_pop($auto);
ausgabeFormatiert($auto);

*/



// 7) Du möchtest ein Element zu einem Array hinzufügen. Welche Funktion gibt es hierfür?


/*

function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}


ausgabeFormatiert($auto);

array_push($auto, "Neues Element im Array"); // Funktionsaufruf (ARRAY, "Neuer Wert")

ausgabeFormatiert($auto);

*/


// 8) Entferne das erste Element eines Arrays.

/*

function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}


ausgabeFormatiert($auto);
array_shift($auto); // Funktionsaufruf (PARAMETER)

ausgabeFormatiert($auto);

*/



// 9) Füge an den ersten Index ein neues Element hinzu.

/*

function ausgabeFormatiert($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}

ausgabeFormatiert($auto);
array_unshift($auto, "Neu");
ausgabeFormatiert($auto);

*/