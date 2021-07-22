<?php

/** Einfache Wiederholungsaufgaben zu funktionen */




// Eine Funktionsdeklarierung beginnt mit dem Wort function. Ist function ein Key-Word, Schlagwort oder ein  Schlüsselwort?
// Schluesselwort, Keyword

// Mit welchem Wort beschreiben wir den Namen einer Funktion oder einer Variablen?
//                  Bezeichner
// function         sageHallo

// Wie nennen wir die Variablen in den runden Klammern (), welche im Funktions-Body verarbeitet werden?
// Parameter

/*function addiere($zahl1, $zahl2)
{
  // Verarbeiten unserer Parameter

  // Fertig mit der Verarbeitung, gebe was verarbeitet aus
  return $zahl1 + $zahl2;     
}
*/



// Welches Schlüsselwort wird verwendet, wenn eine Funktion ein Ergebnis, eine Variable oder ein Objekt zurückgibt?
// return



/** Eine Funktion soll die m2 eines Raums berechnen */

/*
function squaremeters($l, $w)
{
  return = $l * $w;
}

$result = squaremeters(4, 5);

// var_dump($result);

echo "Der Raum hat eine $result m2.";
*/

/**
 * Ein Wirtschaftsprüfungsunternehmen benötigt einer Webapplikation einige Funktion um die
 * bilanzielle Zusammensetzung des Kapitals eines Unternehmens aufzuzeigen. 
 * 
 * Du wurdest beauftragt diese Funktionen zu entwickeln.
 * 
 * Entwickle eine Funktion, welche die Eigenkapitalquote berechnet. Die Eigenkapitalquote gibt an,
 * wie hoch der Anteil in Prozent des Eigenkapitals am Gesamtkapital ist. Sie wird zur Beurteilung der
 * Kapitalkraft des Unternehmens herangezogen.
 * 
 * Die Formel lautet: Eigenkapitalquote = Eigenkapital / Gesamtkapital x 100
 */

/*
function eigenkapitalQuote($eigenKapital, $gesamtKapital)
{
  return ($eigenKapital / $gesamtKapital) * 100;
}

$result = eigenkapitalQuote(5000,100000);

echo "Die Eigenkapitalquote liegt bei $result %";
*/


 /**
  * Die Fremdkapitalquote gibt an, wie hoch der Anteil des Fremdkapitals am Gesamtkapital ist.
  * Diese Bonitätsgröße ist von Unternehmensart, Branche und der wirtschaftlichen Lage eines
  * Unternehmens abhängig.
  *
  * Die Formel lautet: Fremdkapitalquote (Anspannungskoeffizient) = Fremdkapital / Gesamtkapital x 100
  *
  * Entwickle eine Funktion, um die Fremdkapitalquote in Prozent zu bestimmen.
  */

/*
function fremdkapitalQuote($fremdkapital, $gesamtKapital)
{
  return($fremdkapital / $gesamtKapital) * 100;
}

$result = fremdkapitalQuote(99000, 100000);

echo "Die Fremdkapitalquote liegt bei $result %.";
*/

/**
 * Der Verschuldungsgrad zeit das Verhältnis von Fremdkapital zu Eigenkapital. Je kleiner der Verschuldungsgrad,
 * desto kreditwürdiger ist das Unternehmen.
 * 
 * Formel: Verschuldungsgrad = Fremdkapital / Eigenkapital * 100
 * 
 * Entwickle eine Funktion, um den Verschuldungsgrad in Prozent zu bestimmen.
 */

 function verschuldungsGrad($fremdkapital, $eigenKapital)
 {
   return($fremdkapital / $eigenKapital) * 100;
 }

$result= verschuldungsGrad(33000,20000);

echo "Du bist mit $result % verschuldet";
