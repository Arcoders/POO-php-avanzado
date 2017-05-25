<?php

use Arcoders\{User, LunchBox, Food};

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

$joanie = new User(['name' => 'Joanie']);

$haley = new User(['name' => 'Haley']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true])
]);

$joanie->setLunch($lunchBox);

$joanie->eatMeal();
