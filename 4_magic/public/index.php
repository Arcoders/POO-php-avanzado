<?php

use Arcoders\User;

require '../vendor/autoload.php';

$user = new User(['name' => 'Ismael', 'email' => 'admin@arcoder.com']);

echo $result =  serialize($user);

file_put_contents('../storage/user.txt', $result);
