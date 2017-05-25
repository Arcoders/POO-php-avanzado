<?php

use Arcoders\{User, LunchBox, Food};

require '../vendor/autoload.php';

$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true])
]);

$joanie->setLunch($lunchBox);

$joanie->eatMeal();
