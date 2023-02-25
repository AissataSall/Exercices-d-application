<?php
switch($_POST["choix"])
{
    case "vendre":
    header("location:pagevente.html");
    break;
    case "Acheter":
    header("location:pageachat.html");
    break;
    case "Louer":
    header("location:pagelocation.html");
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE</title>
</head>
<body>
    <form action-``<?=  $_SERVER['PHP_SELF'] ?>`` method=``pont``>
        <fieldset>
            <legend><b>Faites votre choix </b></legend>
            <table border-``0`` >
                <tr>
                    <td><input type="submit" name="choix" value="Vendre"/></td>
                    <td><input type="submit" name="choix" value="Acheter"/></td>
                    <td><input type="submit" name="choix" value="Louer"/></td>
                </tr>
            </table>
        </fieldset>
        
    </form>
</body>
</html>