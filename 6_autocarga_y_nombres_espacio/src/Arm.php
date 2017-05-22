<?php

namespace Arcoders;

abstract class Arm
{

    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    abstract public function getDescription(Unit $attacker, Unit $opponent);

}
