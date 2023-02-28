<?php
$clients = ["Bob", "anna", "john"];
$admins = ["Boby", "john"];
$nbClients = count($clients);
var_dump(count($clients));

$users = array_merge($clients, $admins);
var_dump($users);

$sortedUsers = sort($users);
var_dump($sortedUsers);

