<!-- lien pour relier un fichier PHP -->
<?php
require_once 'products.php' 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="row conatiner text-center justify-content-center">
        <h1 class="">Produit</h1>
        <?php
        foreach ($products as $product) { ?>
            <div class=" d-flex justify-content-center m-5" style="background-color: <?php echo $product['color'];?>" id="zone1">
            id : <?php echo $product['id'];?> <br>
            nom du Produit : <?php echo $product['name'];?> <br>
            price : <?php echo $product['priceHT'];?> <br>
            promo : <?php echo $product['promo'] ? '&#9989;' : '&#10060;';?> <br>
            color : <?php echo $product['color'];?>
            </div>
            <?php }?>
    </section>
</body>
</html>