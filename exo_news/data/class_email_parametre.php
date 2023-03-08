<?php

class EmailParametre{

    public static function EmailValid($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function EmailExist($email) {
        $emailsFileContent = file_get_contents('emails.txt');
        $emails = array_filter(
            explode(PHP_EOL, $emailsFileContent),
            fn ($email) => $email !== '' );

        return in_array($email, $emails);
    }

    public static function SaveEmail($email) {
        $emailsFile = fopen('emails.txt', 'a');
        $write = fwrite($emailsFile, $email . PHP_EOL);
        if ($write !== false) {
            echo "Adresse email enregistrée";
        }
        fclose($emailsFile);
    } 
}