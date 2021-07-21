<?php

// Variablen deklarieren & initialisieren

$a;
$b = 5;
$c = 2.1;
$d = "a";
$e = "Ein String";

const KONST2 = "Wert 2";
define("KONST", "WERT VON KONST");



var_dump(KONST2);

// OPERATOREN
// math. +-*/%
// vergleichsop. == === < <= > >=
// logischeop. || &&



// BEISPIELE IF und IFELSE & VERSCHACHTELT
if (condition) {
    # wenn condition true
}


if (condition /* AUSDRUCK PRUEFEN */) {
    # wenn condition true

    echo "true";

} else {
    # wenn condition false

    echo "false";
}


// VERSCHACHTELT
if (condition) {
    # wenn condition true

   if (condition) {
       # code...
   } else {
       # code...
   }
   
    
} else {
    # wenn condition false

    if (condition) {
        # code...
    } else {
        # code...
    }
    
}

// SCHLEIFEN

// KOPFGESTEUERT SCHLEIFEN
for ($i=0; $i < /* WERT */; $i++) { 
    # code...

    echo "Aktueller Wert von Variable i ist: " $i;
}

while ($a <= 10) {
    # code...
    $a++
}

// FUSSGESTEUERT SCHLEIFE
do {
    # code...
    $a++
} while ($a <= 10);


// FOREACH

$namen = [
    "Khalid", // Index 0
    "Jamali", // Index 1
    "Joey"    // Index 2
];

foreach ($namen as $name) {
    echo "Dein Name: " . $name . "<br>";
}



// key : value - pair
$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($ages as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

