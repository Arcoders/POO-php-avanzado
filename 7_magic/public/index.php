<?php

use Arcoders\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name' => 'Ismael',
    'last_name' => 'Haytam'
]);

$user->nickname = 'Arcoders';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) echo "<p>Nickname {$user->nickname}</p>";
