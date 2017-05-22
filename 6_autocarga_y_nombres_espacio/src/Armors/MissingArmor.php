<?php

namespace Arcoders\Armors;
use Arcoders\{Armor, attack};

class MissingArmor implements Armor
{

    public function absorbDamage(Attack $attack)
    {

        return $attack->getDamage();

    }

}
