<!-- exo afficher en sens inverse les clients -->

<?php
$clients = ["manu", "johnny", "fabienne", "eude"];

// Boucle for
echo "<h2>boucle for :</h2>" . "<br />";
for ($i = count($clients) - 1; $i >= 0; $i--) {
    echo $clients[$i] . "<br />";
}

// Boucle do...while
echo "<h2>boucle do...while :</h2>" . "<br />";
$i = count($clients) - 1;
do {
    echo $clients[$i]  . "<br />";
    $i--;
} while ($i >= 0);
