<?php

namespace Arcoders\Arm;
use Arcoders\{Arm, Unit};

class CrossBow extends Bow
{

    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }

}
