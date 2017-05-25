<?php

use Arcoders\{User, LunchBox};

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

$joanie = new User(['name' => 'Joanie']);

$haley = new User(['name' => 'Haley']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

$joanie->setLunch($lunchBox);

$joanie->eatMeal();
