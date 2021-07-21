<?php


/*
                Build in Development

settype()
gettype()
isset()
empty()
is_null()
unset()
var_dump()

                                Hausaufgabe bis 16.07.2021
Github.com anmelden
Git-Source Control System / git scm


*/
//PHP Code

// Beispiel Datenbank Code

// Einzeiliger Kommentar / Singleline Comment

/* Mehrzeiliger Kommentar / Multiline Comment
kljlkjff
dffg
dgfdg

Constante Werte sind eindeutige Werte die man vergibt

Variable Werte sind 





*/

/* leerzeile und dann * dann werden alle Enter mit Stern ausgegeben
 *
 * 
 * 
*/

// $variablenName

//$age = 18;

// echo($age);

/*var_dump($age);

$Zahl = 22;
$Charakter = 'A';
$String = 'Bear';
$fliesskommazahl = 12.50;

*/

/*
echo($Zahl);
echo($Charakter);
echo($String);
echo($fliesskommazahl);
*/

// var_dump($fliesskommazahl)


/*
$a = 50;
$b = 500;
 
echo($a + $b);

*/

/* Mathematische Operationen / Arithmathische Operationen

$a + $b;
$a - $b;
$a * $b;
$a / $b;


Operatoren
        =       ZUWEISUNGSOPERATOR


Vergleichsoperatoren
        

        ==          Gleich
        ===         Identisch / Strikte Gleichheit
        <           Kleiner
        <=          Kleiner Gleich
        >           Größer
        >=          Größer Gleich


    === Datentyps werden verglichen

    Bsp.

    $a=5.0     Float oder decimal
                ===
    $b=5       Integer

    würde False nicht true weil sie nicht das gleiche Datentyp

Logische Operatoren


    !       nicht
    ||      oder
    &&      und

    Bsp:

    $text1 = "Hallo";
    $text2 = "Hallo";

    if ($text1 == $text2)
    {
            echo "jo, ist gleich";
    } 
    else
    {

    }

*/


$greetings = 'Hallo, ';
$name = 'Chicken';
$satzzeichen = '!';
$check = 'nicht anwesend';

echo $greetings.$name.$satzzeichen;


echo("<br>");

echo 'Hallo, $name !';  // single quotes -> kein variablen Wert in Ausgabe

echo("<br>");

echo "Hallo, $name !";

echo("<br>");

echo "Hallo, $name ! Ist heute $check."; // double qoutes -> Variablen Wert in Ausgabe ok

echo("<br>");

echo '$a '. gettype($name);    // Von welchen Typ ist meine Variable

echo("<br>");

$a = settype($a, "double");

echo '$a '. gettype($a);

/*
    Pascal Case

        LegalAge


    Snake Case

        legal_age_

    camelCase

        legalAge

    Boolean > Wahrheitswert ist entweder true 1 oder false 0


*/
echo("<br>");
$age= 18; // Variablen korrekt benennen
$legalAge = false;  // Achten auf camelCase
print (isset($age));
echo("<br>");
var_dump (isset($age));

echo("<br>");
$age2;
$legalAge2 = false;
print (isset($age2));
echo("<br>");
var_dump(isset($age2));


isset($age); // Prüfen ob Variable gesetzt wurde 

echo empty($age);

echo("<br>");
echo $age;


echo ("<br>");
if($age>= 18)
{
    echo "Welcome to our Club!";
}else 
{
    echo "Du kommst hier nicht rein!";
}

echo("<br>");
$test = "Irgend ein Text";
if (isset($test)) 
{
   echo $test;
}
else 
{
   echo "Variable nicht gesetzt";
}

echo("<br>");
$test2 ="";

if (empty($test2)) {
   echo 'Text Ist leer.';
}else {
    echo 'Text Ist voll.';
}

echo("<br>");
var_dump($test);

echo("<br>");


echo("<br>");
$test3 = null;

if (empty($test3)) {
   echo 'Text Ist leer.';
}else {
    echo 'Text Ist voll.';
}

echo("<br>");
echo "gettype: " . gettype($test3);
echo("<br>");
var_dump($test3);

unset($test3);


// Konstanten

const Konstante1 = "Wert1";

define("NachnameVonChicken", "Bill");
echo("<br>");
var_dump(NachnameVonChicken);

// Inkrement ++ und Dekrement --
// PRE ++ $var
// POST $var++

echo("<br>");
$d = 5;

/*
$d = $d + 1;
$d += 1;
$d++;

echo($d);

*/

echo("<br>");

echo "<br> zeile 260: " . $d++;
echo "<br> zeile 261: " . $d;
echo "<br> #########";
echo "<br> addiere & gebe aus" . ++$d;



/*
$products = [
                /*"Kühlschrank",
                "Ein super schöner Kühlschrank.",
                "500€";

                "Kühlschrank 1",
                "Kühlschrank 2",
                "Kühlschrank 3";
            ]

var_dump($products);

foreach ($products as $item){
    echo "<h1>$item</h1>";

}
*/


// Switch Condition


/* 
$farbe = "gruen";



switch ($farbe) {
    case 'gelb':
       echo 'Die Farbe ist Gelb!';
        break;
    
    case 'rot':
        echo 'Die Farbe ist Rot!';
        break;

    default: // Default ist wenn keine Option gesetzt wurde
        echo 'Dieser Case hat keine Option zur Farbe Gruen!';
        break;    
}

*/
echo("<br>");


// Uebung 1

/*
$checkAge = 18;

switch ($checkAge) {
    case ($checkAge <= 16):
        echo 'Du bist $checkAge Jahre alt.';
        break;

    case ($checkAge <= 18):
        echo 'Du bist $checkAge Jahre alt.';
        break;

    case 21:
        echo 'Du bist $checkAge Jahre alt.';
        break;

    case 65:
        echo 'Du bist $checkAge Jahre alt.';
        break;
    
    default:
        echo 'Du musst Rentner sein.';
        break;
}

*/

// Uebung 2

/*
$checkAge = 9;

switch ($checkAge) {
    case ($checkAge < 10):
        echo 'Sie sind unter 10';
        break;
    
    case ($checkAge < 30):
        echo 'Sie sind zwischen 10 und 29';
        break;

    case ($checkAge < 50):
        echo 'Sie sind zwischen 30 und 49';
        break;

    case ($checkAge < 70):
        echo 'Sie sind zwischen 50 und 69';
        break;
    
    default:
        echo 'Sie passen in keiner der Kategorie.';
        break;
}
*/

// korrektur Übung 2

/*
switch ($checkAge) {
    case $checkAge >=10 && $checkAge < 30:
        echo 'Sie sind zwischen 10 und 29';
        break;

    case $checkAge >=30 && $checkAge < 50:
        echo 'Sie sind zwischen 30 und 49';
        break;    
    

    case $checkAge >=50 && $checkAge < 70:
        echo 'Sie sind zwischen 50 und 69';
        break;
    default:
        echo 'Sie passen in keine der Kategorien.'
        break;
}

*/

$checkAge = 10;

if ($checkAge > 30)
{
    echo 'Aelter als 30';
} else {
    echo 'Juenger als 30';
}


/* Wenn es nur eine PHP-Datei ist wird die Funktion nicht geschlossen

    WENN aber eine HTML-Funktion Bsp: <!doctype html> geschrieben wird,
    muss die PHP geschlossen werden bevor die HTML-Funktion geschrieben werden kann

*/

?>      

<br><br>
HTML-Code

