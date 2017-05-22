<?php

namespace Arcoders\Armors;
use Arcoders\Armor;

class SilverArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 4;
    }

}
