<?php

namespace Arcoders;

abstract class Arm
{

    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Arcoders\Arm\\', '', get_class($this)).'Attack';
    }

}
