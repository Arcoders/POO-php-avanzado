<?php

use Arcoders\HtmlNode;

require '../vendor/autoload.php';


$value = 'Lorem ipsum...';

// --------------------------------------------

$node_1 = new HtmlNode('textarea', $value, [
            'name' => 'content',
            'class' => 'btn btn-default']
        );

echo $node_1 = $node_1->render();

// --------------------------------------------

$node_2 = (new HtmlNode('textarea', $value))
            ->name('content')
            ->class('btn btn-default');

echo $node_2->render();

// --------------------------------------------

$node_3 = HtmlNode::textarea($value)
            ->name('content')
            ->class('btn btn-default');

echo $node_3->render();
