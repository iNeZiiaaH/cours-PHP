<?php


function arrondi($nombre) {
    $entier = (int)$nombre;
    $decimal = $nombre - $entier;
    if ($decimal < 0.25) {
        return $entier;
    } elseif ($decimal >= 0.75) {
        return $entier + 1;
    } else {
        return $entier + 0.5;
    }
};

var_dump(arrondi(0.234)) . "<br />"; 
var_dump(arrondi(1.56)) . "<br />"; 
var_dump(arrondi(1.27)) . "<br />"; 
var_dump(arrondi(1.12)) . "<br />"; 
var_dump(arrondi(1.25)) . "<br />"; 
var_dump(arrondi(3.89)) . "<br />"; 
var_dump(arrondi(7.23)) . "<br />"; 
var_dump(arrondi(8.7) ) . "<br />"; 
var_dump(arrondi(2.45)) . "<br />"; 
var_dump(arrondi(5.8)) . "<br />"; 
var_dump(arrondi(10.2)) . "<br />"; 