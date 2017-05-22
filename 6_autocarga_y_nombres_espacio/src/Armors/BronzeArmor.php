<?php

namespace Arcoders\Armors;
use Arcoders\Armor;

class BronzeArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}
