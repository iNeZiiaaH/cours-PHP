<?php


function arrondi($nombre) {
    $entier = (int)$nombre;
    $decimal = $nombre - $entier;
    if ($decimal < 0.25) {
        return $entier;
    } elseif ($decimal > 0.75) {
        return $entier + 1;
    } else {
        return $entier + 0.5;
    }
};

echo arrondi(0.234) . "<br />"; 
echo arrondi(1.56) . "<br />"; 
echo arrondi(1.27) . "<br />"; 
echo arrondi(1.12) . "<br />"; 
echo arrondi(1.25) . "<br />"; 
echo arrondi(3.89) . "<br />"; 
echo arrondi(7.23) . "<br />"; 
echo arrondi(8.7) . "<br />"; 
echo arrondi(2.45) . "<br />"; 
echo arrondi(5.8) . "<br />"; 
echo arrondi(10.2). "<br />"; 
