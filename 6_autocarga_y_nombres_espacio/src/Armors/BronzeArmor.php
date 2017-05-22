<?php

namespace Arcoders\Armors;
use Arcoders\{Armor, Attack};

class BronzeArmor implements Armor
{

    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

}
