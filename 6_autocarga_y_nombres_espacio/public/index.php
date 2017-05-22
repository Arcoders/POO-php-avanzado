<?php

namespace Arcoders;

require '../vendor/autoload.php';

$randName = new Unit('Malon', new Arm\BasicSword);

$randName->setArmor(new Armors\SilverArmor());

$arcoders = new Unit('Arcoders', new Arm\CrossBow);

$arcoders->move('el norte');

$arcoders->attack($randName);

$arcoders->attack($randName);

$randName->attack($arcoders);
