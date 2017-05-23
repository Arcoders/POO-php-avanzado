<?php

namespace Arcoders\Armors;
use Arcoders\{Armor, Attack};

class SilverArmor extends Armor
{

    public function absorbPhiysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }

}
