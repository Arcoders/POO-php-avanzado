<?php

namespace Arcoders;

class Unit {

    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $arm;
    protected $logger;

    public function __construct($name, Arm $arm, $logger)
    {
        $this->name = $name;
        $this->arm = $arm;
        $this->armor = new Armors\MissingArmor();
        $this->logger = $logger;
    }

    public static function createSoldier($logger)
    {

        $soldier = new Unit('Malon', new Arm\BasicSword, $logger);
        $soldier->setArmor(new Armors\BronzeArmor());

        return $soldier;

    }

    public function setArm(Arm $arm)
    {
        $this->arm = $arm;
        return $this;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function setShield()
    {
        return $this;
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
        $this->logger->info("{$this->name} avanza hacia $direction");
    }

    public function attack(Unit $opponent)
    {

        $attack = $this->arm->createAttack();

        $this->logger->info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);

    }

    public function takeDamage(Attack $attack)
    {

        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

        $this->logger->info("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) $this->die();

    }

    public function die()
    {
        $this->logger->info("{$this->name} muere :/");
        exit();
    }


}
