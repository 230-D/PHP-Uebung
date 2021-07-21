<?php

  // (Bedingung) ? True - Anweisung : False Anweisung

if(isset($_POST["submit"]))
{

$username =  (isset($_POST["username"]) && 
          is_string($_POST["username"])) ? 
                    $_POST["username"] : "";

$password = (isset($_POST["password"]) && 
         is_string($_POST["password"])) ? 
                   $_POST["password"] : "";




$username = trim($username);    // Whitespace vorne und hinten
$password = trim($password);

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);





try {
    $db = new PDO('mysql:host = localhost; dbname = erstedb', 'root', '');
} catch (PDOException $error) {
    echo 'Fehler: ' . $error -> getMessage();
    exit();
}

$sql = "INSERT INTO personen (Username, Passwort); 
        VALUES(:ph_Username, :ph_Passwort)";

$befehl = $db -> prepare($sql);

$befehl -> bindParam(':ph_Username', $username);
$befehl -> bindParam(':ph_Passwort', $password);


$befehl -> execute();


// Leitet uns in einer bestimmten Seite weiter
header ("Location: formular_.php");

}



