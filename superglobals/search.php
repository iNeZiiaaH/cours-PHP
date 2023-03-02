<?php
// recuperation des données 
require_once 'data/users.php';

// recuperation du parametre URL
['q' => $search] = $_GET;

// je recupere les resultats dans $users
// function anonme
$results = array_filter($users, function ($users) use ($search) {
    return str_contains($users['name'], $search);
});

// function fléchée 
// $results = array_filter($users, fn ($u) => str_contains($u['name'], $search));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche</title>
</head>
<body>
    <h1>resultatsde recherche <?php echo count($results); ?></h1>
</body>
</html>
