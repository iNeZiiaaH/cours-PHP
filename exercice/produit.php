<?php
require_once 'layout/header.php';
require_once 'layout/nav.php';
require_once 'templates/products.php';
?>
<section class="row conatiner text-center justify-content-center">
        <h1 class="">Produit</h1>
        <?php
        foreach ($products as $product) { ?>
        <div class=" d-flex justify-content-center m-5" href="#produit" style="background-color: <?php echo $product['color'];?>" id="zone1">
        id : <?php echo $product['id'];?> <br>
        nom du Produit : <?php echo $product['name'];?> <br>
        price : <?php echo $product['priceHT'];?> <br>
        promo : <?php echo $product['promo'] ? '&#9989;' : '&#10060;';?> <br>
        color : <?php echo $product['color'];?>
        </div>
        <?php }?>
</section>