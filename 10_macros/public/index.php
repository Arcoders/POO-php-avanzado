<?php

require '../vendor/autoload.php';
require '../vendor/laravel/HtmlBuilder.php';

use Laravel\HtmlBuilder;

$html = new HtmlBuilder();

echo $html->hr();

echo $html->success('Todo salió bien!');
