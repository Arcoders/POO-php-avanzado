<?php

namespace Arcoders;

use Arcraft\Armor as ArcraftArmor;

class BronzeArmor implements ArcraftArmor
{

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}
