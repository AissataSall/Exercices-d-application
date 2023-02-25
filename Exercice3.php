<?php
 /** Boucle For **/
$numbre=567;
$randNumbre=0;
$coups;
for($coups=0;$randNumbre!=$numbre;$coups++){ 
    $randNumbre=rand(100,999);
    echo "--[ $randNumbre ]";
    $coups++;
}
echo "<br>Le nombre de coups est : $coups";
?>

<?php
    /** Boucle While **/
$numbre=567;
$randNumbre=0;
$coups=0;
while($randNumbre!=$numbre){

    $randNumbre=rand(100,999);
    echo "--[ $randNumbre ]";
    $coups++;
}
echo "<br>Le nombre de coups est : $coups";
?>
