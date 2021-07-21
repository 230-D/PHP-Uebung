<?php
// Server
/*
echo $_GET["Username"];
echo $_GET["Passwort"];
*/

$firstname = (isset($_POST["firstname"]) && 
          is_string($_POST["firstname"])) ? 
                    $_POST["firstname"] : "";

$lastname = (isset($_POST["lastname"]) && 
         is_string($_POST["lastname"])) ? 
                   $_POST["lastname"] : "";

var_dump($firstname); 
echo'<br>######'. '<br>';
var_dump($lastname);


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
    
<form method="post" action="">
    <label for="firstname">FirstName</label><br>
    <input type="text"> <br>
    <label for="lastname">LastName</label><br>
    <input type="text"> <br>
    <input type="button" value="SEND">

</form>



</body>
</html>