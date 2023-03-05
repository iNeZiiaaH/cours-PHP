<?php
require_once 'data/cars.php';

$years = [];


foreach($cars as $car){
    $years[] = $car->getYear();
};


