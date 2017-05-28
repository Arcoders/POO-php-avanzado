<?php

require '../vendor/autoload.php';

use Arcoders\User;

$user = new User([
    'first_name' => 'Ismael',
    'last_name' => 'Haytam',
    'birthDate' => '10/08/1995'
]);

echo "<p>{$user->full_name} tiene {$user->age} años</p>";
