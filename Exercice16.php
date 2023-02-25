<?php

function sinus($x,$unit)
{
    switch($unit)
    {
        case "R":
        case "r":
        return sin($x);
        break;
        case "D":
        case "d":
        return sin($x/180*PI());
        break;
        case "G":
        case "g":
        return sin($x/200*PI());
        break;
    }
}

echo sinus(PI()/6,"R"),"<br />";
echo sinus(60,"d"),"<br />";
echo sinus(100,"g"),"<br />";
?>