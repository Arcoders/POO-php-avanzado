<?php

namespace Arcoders;

abstract class Arm
{

    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit ataca a :opponent';

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }

}
