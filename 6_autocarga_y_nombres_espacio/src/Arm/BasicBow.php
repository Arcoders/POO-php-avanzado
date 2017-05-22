<?php

namespace Arcoders\Arm;
use Arcoders\{Arm, Unit};

class BasicBow extends  Bow
{

    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }

}
