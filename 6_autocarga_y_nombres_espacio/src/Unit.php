<?php

namespace Arcoders;

abstract class Unit {

    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $arm;

    public function __construct($name, Arm $arm)
    {
        $this->name = $name;
        $this->arm = $arm;
    }

    public function setArm(Arm $arm)
    {
        $this->arm = $arm;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
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

    public function attack(Unit $opponent)
    {

        show($this->arm->getDescription($this, $opponent));

        $opponent->takeDamage($this->arm->getDamage());

    }

    public function takeDamage($damage)
    {

        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->getHp() <= 0) $this->die();

    }

    public function die()
    {
        show("{$this->name} muere :/");
        exit();
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) return $this->armor->absorbDamage($damage);
    }


}
