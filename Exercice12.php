<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE</title>
</head>
<body>
    <form action="ch6exol.php" method="post">
        <fieldset>
            <legend><b>Saisir vos coordonnees</b></legend>
    <table border="0">
        <tr>
            <td>Nom : </td>
            <td><input type="text" name="nom" /></td>
        </tr>
        <tr>
            <td>Prenom : </td>
            <td><input type="text" name="prenom" /></td>
        </tr>
        <tr>
            <td>Adress : </td>
            <td><input type="text" name="adress" /></td>
        </tr>
        <tr>
            <td>Ville : </td>
            <td><input type="text" name="Ville" /></td>
        </tr>
        <tr>
            <td>Code postal : </td>
            <td><input type="text" name="code" maxlength="5" /></td>
        </tr>
        <tr>
            <td>CONFIRMER </td>
            <td><input type="submit" value="ENVOI" /></td>
        </tr>
    </table>
        </fieldset>
    </form>

<?php
echo "<table border=\"1\" >";
echo "<caption><b>confirmation de vos coordonnees</b></caption>";
foreach($_POST as $cle=>$val)
{
    echo "<tr> <td> $cle : &nbsp ;</td> <td>".stripslashe($val)."</td></tr>";
}
echo "</table>";
?>

</body>
</html>