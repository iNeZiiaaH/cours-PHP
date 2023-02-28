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

var_dump(arrondi(0.234)); 
var_dump(arrondi(1.56)); 
var_dump(arrondi(1.27)); 
var_dump(arrondi(1.12)); 
var_dump(arrondi(1.25)); 
var_dump(arrondi(3.89)); 
var_dump(arrondi(7.23)); 
var_dump(arrondi(8.7)); 
var_dump(arrondi(2.45)); 
var_dump(arrondi(5.8)); 
var_dump(arrondi(10.2)); 