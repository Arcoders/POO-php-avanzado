<?php

abstract class Unit {

    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p>{$this->name} avanza hacia $direction</p>";
    }

    abstract public function attack($opponent);


}

class Soldier extends Unit
{

    public function attack($opponent)
    {
        echo "<p>{$this->name} lanza un golpe a {$opponent}</p>";
    }

}

class Archer extends Unit
{

    public function attack($opponent)
    {
        echo "<p>{$this->name} dispara una flecha a {$opponent}</p>";
    }

}

$arcoders = new Archer('Arcoders');
$arcoders->move('el norte');
$arcoders->attack('Rand Name');

echo '<hr>';

$arnoders = new Soldier('Arnoders');
$arnoders->move('el norte');
$arnoders->attack('otro malo');
