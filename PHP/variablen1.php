<?php

/*

Kopfgesteuerte Schleifen

Inkrement

Wert $i = 0
Wert $i++ wert wird immer um 1 gesteigert bis $i <= 10


for ($i=0; $i <= 10 ; $i++)
{
    echo "$i" . "<br>";
}


$a = 0;

while ($a <= 10)       
{
    echo "$a" . "<br>";
    $a++;
    $a--;
}

while (Bedingung)
{
    Anweisung;
    Itterations-Anweisung;
}




Fußgesteuerte Schleifen

$b = 0;

do {             Führt erste Bedingung einmal aus, durch while wird dann
                    geprüft ob/wie viele male die Schleife geloopt wird 
    echo "Hallo Leute! <br>";
    $b++;
} while ($b <= 0);




ARRAY

Ausgangssituation: Chicken verkauft Fahrraeder


$fahrradArray1 =
[
    'Fahrrad1',
    'Fahrrad2',
    'Fahrrad3',
    'Fahrrad4',
    'Fahrrad5',
    'Fahrrad6'
];

echo "<pre>";
var_dump($fahrradArray1)
echo "</pre>";



IndexBasierte ARRAYS    > 0-Basiert

Ausgangssituation: Chicken verkauft Fahrraeder


$fahrradArray =
[
    'FahrradIndex',
    'Fahrrad2',
    'Fahrrad3',
    'Fahrrad4',
    'Fahrrad5',
    'Fahrrad6'
];


foreach ($fahrradArray as $fahrrad)
{
    echo "<h2"$fahrrad</h2>;
}


echo "<h2>$fahrradArray[0]</h2>";
echo "<h2>$fahrradArray[1]</h2>";
echo "<h2>$fahrradArray[2]</h2>";
echo "<h2>$fahrradArray[3]</h2>";
echo "<h2>$fahrradArray[4]</h2>";
echo "<h2>$fahrradArray[5]</h2>";




Assoziatives ARRAY

$fahrradArray3 =
[
    'Fahrrad1' => 500,
    'Fahrrad2' => 200,
    'Fahrrad3' => 1200
];

echo "<pre>";
var_dump($fahrradArray3)
echo "</pre>";


foreach ($fahrradArray3 as $key => $value)
{
    echo "<strong>$key: </strong> $value Euro.<br>";

}



*/


$fahrradArray3 =
[
    'Fahrrad1' => 500,
    'Fahrrad2' => 200,
    'Fahrrad3' => 1200
];

echo "<pre>";
var_dump($fahrradArray3);
echo "</pre>";


foreach ($fahrradArray3 as $key => $value)
{
    echo "<strong>$key: </strong> $value Euro.<br>";

}

echo "test . <br>";

echo "Test";




// Funktions Deklarierung

function multipliziere($a, $b)
{
    return $a + $b;
}

// Funktions Aufruf

var_dump(multipliziere (10,5));


/*
echo multipliziere(10,5);

multipliziere(20, 4);

function addiere ($a, $b, $c, $d)
{
    $zwischensumme = multipliziere($a, $b);

    return $a;
}
*/





// Funktions Deklarierung

function urlaubsgruess($text)
{
    echo "Ich wuensche dir einen $$text Urlaub.";

}

// Funktions Aufruf

urlaubsgruess ("schlechten");





