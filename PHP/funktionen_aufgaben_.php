<?php


/**
 * Schreibe eine Funktion die zwei Variablen vom Datentyp Integer miteinander addiert.
 * Benenne die Funktion eindeutig.
 */


/*        SchlüsselWort benennen  (Parameter)

{
                  Funktionskörper
}

*/


function addiere($a, $b)
{
  return $a + $b;
}

var_dump( addiere(40,20));


echo "<br>";


 ######################

/**
 * Schreibe eine Funktion die die Summe von aufeinanderfolgenden Zahlen berechnen. 
 * Da dies mit dem Taschenrechner ein sehr großer Tippaufwand wäre, stellt sich die Frage:
 * Warum wollen wir das nicht einfach den Computer erledigen lassen?
 *
 * Schreibe ein Programm, das mit einer for-Schleife die Summe der Zahlen von 3 bis 27 berechnet.
 *
 *  Benenne die Funktion eindeutig.
 *
 * Gebe das Ergebnis per var_dump() aus. 
 */

/*

$summe = 0;

for ($i = 3; $i < 27 ; $i++) { 
  $summe = $summe + $i;
}

var_dump ($summe+$i);


echo "<br>";
*/

function berechnesumme ($von, $bis)
{
  $summe = 0;

for ($i = $von; $i <= $bis; $i++) 
{ 
  $summe = $summe + $i;
}
return $summe;
}

echo "<br>";

 ######################


 /**
  * Schreibe eine Funktion die "Hallo Micky Mouse" in einem <h1> ausgibt.
  * Benenne die Funktion eindeutig.
  */


name ("Hallo Micky Mouse");

function name($text)
{
  echo "<h1>$text ist mein Name.</h1>";
}


echo "<br>";

 ######################


 /**
  * Schreibe eine Funktion die per foreach und echo eine Array in einer unorderd list als liste-items ausgibt.
  * 
  * Tipps: Initialisiere ein Array, Index-basiert oder Assoziativ.
  * Übergebe das Array an die Funktion 
  */



function auto ($autoarray)
{
  
  foreach ($autoarray as $key => $value) 
  {
    
    echo "<li>$key: $value Euro <br>";
    
  }
  
}

auto ($autoarray =
[
  
  'BMW'       => 5000,
  'Mercedes'  => 2000,
  'VW'        => 3000,
  'Renault'   => 1500
  
]
      );


echo "<br>";



/*

// korrektur Assoziatives Array mit Funktion
$auto = array 
(

  'BMW'       => '5000',
  'Mercedes'  => '2000',
  'VW'        => '3000',
  'Renault'   => '1500'

);


function auto ($parameter)
{
  foreach ($parameter as $key => $value) 
  {
    
    echo "<li>$key: $value Euro <br> ";
    
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
      <?php auto($auto); ?>
  </ul>
</body>
</html>

*/
