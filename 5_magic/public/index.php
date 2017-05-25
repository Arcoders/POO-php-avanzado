<?php

use Arcoders\{User, LunchBox};

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

$joanie = new User(['name' => 'Joanie']);

$haley = new User(['name' => 'Haley']);

$lunchBox = new LunchBox(['Sandwich', 'Manzana']);
$lunchBox2 = clone($lunchBox);


$joanie->setLunch($lunchBox);
$haley->setLunch($lunchBox);

$joanie->eat();
$haley->eat();

var_dump($lunchBox, $lunchBox2);
