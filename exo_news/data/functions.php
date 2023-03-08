<?php
function redirect(string $location) :void
{
    header('location: ' . $location);
    exit;
}