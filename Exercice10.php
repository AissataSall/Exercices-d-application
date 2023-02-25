<?php
$tab=array("Dupont"=>array("prenom"=>"Rougaiyatou","ville"=>"Dakar","age"=>"18");"<br />"
"Schmoll"=>array("prenom"=>"Diaraye","ville"=>"Labe","age"=>"12");"<br />";
"Smith"=>array("prenom"=>"Badrou","ville"=>"Kermassar","age"=>"19")),"<br />";
foreach($tab as $cle=>$valeur)
{
    echo"<b>Element $cle :</b><br />";
    foreach($valeur as $cle2=>$val)
    {
        echo"$cle2 :", $val, "<br />";
    }
}
?>