<?php
require_once 'data/cars.php';

$year = $_GET['year'];

$filtered = array_filter ($cars, function ($car) use ($year) {
        return $car->getYear() == $year;
});
var_dump($filtered);