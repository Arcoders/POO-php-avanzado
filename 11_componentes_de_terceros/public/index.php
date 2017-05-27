<?php

require '../vendor/autoload.php';

use Arcoders\User;

$user = new User([
    'name' => 'Ismael Haytam',
    'birthDate' => '10/08/1995'
]);

echo "<p>{$user->name} tiene {$user->age} años</p>";
