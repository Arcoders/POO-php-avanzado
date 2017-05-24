<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {

    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} avanza hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {

        $this->setHp($this->hp - $damage);

        if ($this->getHp() <= 0) $this->die();

    }

    public function die()
    {
        show("{$this->name} muere :/");
    }

    private function setHp($points)
    {
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

    }


}

class Soldier extends Unit
{

    protected $damage = 40;

    public function attack(Unit $opponent)
    {

        show("{$this->name} lanza un golpe a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }

}

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {

        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)) return parent::takeDamage($damage);
    }

}

$randName = new Soldier('Rand Name');
$arcoders = new Archer('Arcoders');
$arcoders->move('el norte');
$arcoders->attack($randName);
$arcoders->attack($randName);

$randName->attack($arcoders);
