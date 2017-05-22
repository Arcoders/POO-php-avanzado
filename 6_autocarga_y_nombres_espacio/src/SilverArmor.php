<?php

namespace Arcoders;

use Arcraft\Armor;

class SilverArmor implements Armor
{

    public function absorbDamage($damage)
    {
        return $damage / 4;
    }

}
