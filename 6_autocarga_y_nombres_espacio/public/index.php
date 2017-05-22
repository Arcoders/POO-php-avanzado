<?php

namespace Arcoders;

require '../vendor/autoload.php';

$randName = new Soldier('Malon', new Arm\BasicSword);

$randName->setArmor(new Armors\BronzeArmor());

$arcoders = new Archer('Arcoders', new Arm\CrossBow);

$arcoders->move('el norte');

$arcoders->attack($randName);

$arcoders->attack($randName);

$randName->attack($arcoders);
