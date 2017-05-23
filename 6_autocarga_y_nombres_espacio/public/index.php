<?php

namespace Arcoders;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent'
]);

$randName = new Unit('Malon', new Arm\BasicSword);

$randName->setArmor(new Armors\SilverArmor());

$arcoders = new Unit('Arcoders', new Arm\FireBow);

$arcoders->move('el norte');

$arcoders->attack($randName);

$arcoders->attack($randName);

$randName->attack($arcoders);
