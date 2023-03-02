<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiche utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body>
    
<?php
require_once 'data/users.php';
// fiche utilisateur a partir du parametre GET
// https://localhost:*****/user.php?id=1

$id = intval($_GET['id']);

foreach ($users as $user) {
    if ($user['id'] === $id) {
        // var_dump($user);
        ?>
        <div class="text-center d-flex justify-content-center flex-column m-auto mt-5 animate__animated animate__rotateIn" id="utilisateur">
            <img src="<?php echo $user['profile_pic']?>" height="300px" width="300px" alt="">
            <h1><?php echo $user['name']?></h1>
            <h3><?php echo $user['firstName']?></h3>
            <p><?php echo $user['email']?></p> 
            <div class="hobbies">
              <?php foreach ($user['hobbies'] as $hobby) {?>
                <div><?php echo $hobby; ?></div>
                <?php }?>
            </div>
        </div>
        <?php
    }
};?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>



