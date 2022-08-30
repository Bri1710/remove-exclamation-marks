<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Remove
{
    public function removeExclamationMarks(string $stringGiven): string
    {
        $replace = ["¡", "!"];
        return str_replace($replace, "", $stringGiven);
    }
}

$removeClassObject = new Remove();
print_r($removeClassObject->removeExclamationMarks("¡hola mundo!"));


