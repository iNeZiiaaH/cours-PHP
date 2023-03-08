<?php

// $email = $_POST['email'];

// // Vérification de la validité de l'adresse e-mail
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Adresse e-mail invalide";
//     exit;
// }

// // Lecture du fichier de sauvegarde des adresses e-mail
// $emails = file("emails.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// // Vérification de l'existence de l'adresse e-mail dans le fichier
// if (in_array($email, $emails)) {
//     echo "Vous êtes déjà inscrit à la newsletter";
//     exit;
// }

// // Sauvegarde de l'adresse e-mail dans le fichier
// file_put_contents("emails.txt", $email . PHP_EOL, FILE_APPEND);

// echo "Vous êtes inscrit à la newsletter";

// require_once 'data/class.php'

require_once 'functions.php';

if (!empty($_POST['email'])) {
  header('index.php?error=1');
  exit;
}

// validité de l'adresse email

$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo "Adresse email invalide";
  exit;
}

//         ----Lecture-----
$emailsFileContent = file_get_contents('emails.txt');
var_dump($emailsFileContent);

$emails = array_filter(
    explode(PHP_EOL, $emailsFileContent),
    fn ($email) => $email !== '');
var_dump($emails);

//  verification de doublon
$emailExist = in_array($_POST['email'], $emails);

if ($emailExist) {
  redirect('index.php');
}


//        ---ecriture---
$emailsFile = fopen('emails.txt', 'a');
$success = fwrite($emailsFile, "retest@example.com " . PHP_EOL);

if ($success !== false) {
    fwrite($emailsFile, $_POST['email'] . PHP_EOL);
    echo "Adresse email enregistrée";
}

fclose($emailsFile);

?>