<?php
// Server
/*
echo $_GET["username"];
echo $_GET["password"];
*/
                      
try {
    $db = new PDO('mysql:host=localhost; dbname = erstedb', 'root', '');
} catch (PDOException $error) {
    echo 'Fehler: ' . $error -> getMessage();
    exit();
}

$sql = "SELECT * 
        from personen";
$befehl = $db -> prepare($sql);

$befehl-> execute();

// $ergebnis = $befehl->fetchall(PDO::FETCH_OBJ);
$ergebnis = $befehl->fetchall(PDO::FETCH_ASSOC);

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
<table>
    <?php foreach ($ergebnis as $item) : ?>
        <tr>
            <td><?php echo $item["personenid"]?></td>
            <td><?php echo $item["username"]?></td>
            <td><?php echo $item["password"]?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p>--------------------------------</p>    
<form method="post" action="senden.php">

    <label for="username">Username</label><br>
    <input type="text" name="username"> <br>
    <label for="password">Passwort</label><br>
    <input type="text" name="password"> <br>
    <input type="submit" name="submit" value="SEND">

</form>



</body>
</html>