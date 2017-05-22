<?php

namespace Arcoders;

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$randName = new Soldier('Malon');
$randName->setArmor($armor);

$arcoders = new Archer('Arcoders');
$arcoders->move('el norte');
$arcoders->attack($randName);

$randName->setArmor(new Armors\SilverArmor());

$arcoders->attack($randName);

$randName->attack($arcoders);
