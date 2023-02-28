<?php
// initialisation d'un tabeau vide
$products = ["ecran"];
// ajout d'un element 
$products [] = "television";
$products [] = "tel";

var_dump($products);
$products[3] = "microphone";
echo $products[3];

// clés personnalisée
$user ['name'] = "John";
$user['age'] = 30;
var_dump($user);

// tableau multi-dimensionnel
$users = [$user, $admin];

$user = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25]
];
var_dump($users);

//  spread operator
$notes = [...$notesPhp];
var_dump($notes);
//   [1,2,3        , 4,5,6]


echo "<h2>Array destructuring</h2>";

$entier = [1, 2, 3];
[$one, $two, $three] = $entiers;
var_dump($one, $two, $three);
var_dump($entiers)

[$last] = $entiers;
var_dump($last);
