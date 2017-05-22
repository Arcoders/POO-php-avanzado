<?php

namespace Arcoders;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
    if (strpos($className, 'Arcoders\\') === 0) {

        $className = str_replace('Arcoders\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new BronzeArmor();

$randName = new Soldier('Malon');
$randName->setArmor($armor);

$arcoders = new Archer('Arcoders');
$arcoders->move('el norte');
$arcoders->attack($randName);

$randName->setArmor(new SilverArmor());

$arcoders->attack($randName);

$randName->attack($arcoders);
