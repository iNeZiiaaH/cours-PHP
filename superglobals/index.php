<?php
require_once 'data/users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue</h1>
<?php
foreach($users as $user){?>
    <div>
        <p><?php echo $user['name']." ".$user['firstName']?></p>
        <a href="user.php?id=<?php echo $user['id']?>">Voir la fiche</a>
    </div>
<?php
}
?>
</body>
</html>

