<?php

namespace Arcoders;

abstract class Armor
{

    public function absorbDamage(Attack $attack)
    {

        if ($attack->isMagical()) return $this->absorbMagicalDamage($attack);

        return $this->absorbPhiysicalDamage($attack);

    }

    public function absorbPhiysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

}
