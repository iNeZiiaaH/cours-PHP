<?php


class Car {
    private string $name;
    private string $engine;
    private int $year ;
    private int $km;

    public function __construct (string $name, string $engine, int $year, int $km) 
    {
        $this->name = $name;
        $this->engine = $engine;
        $this->year = $year;
        $this->km = $km;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $name): void
    {
    $this->name = $name;
    }
    public function getEngine() : string {
        return $this->engine;
    }
    public function setEngine(string $engine): void
    {
    $this->engine = $engine;
    }
    public function getYear() : int {
        return $this->year;
    }
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function getKm() : int {
        return $this->km;
    }
    public function setKm(int $km): void
    {
        $this->km = $km;
    }

}
$cars = [
    new car("Toyota", "Diesel", 2015, 100000),
    new car("Ford", "Essence", 2018, 50000),
    new car("Peugeot", "Essence", 2016, 80000),
    new car("Renault", "Diesel", 2014, 120000),
    new car("Fiat", "Volvo", 2015, 130000),
    new car("Honda", "Volvo", 2016, 140000),
    new car("Honda", "Civic", 2017, 150000),
];

$years = [];

foreach($cars as $car){
    $years[] = $car->getYear();  
} sort($years);


// var_dump($cars);
// echo $car->getName();
// echo $car->getEngine();
// echo $car->getYear();
// echo $car->getKm();