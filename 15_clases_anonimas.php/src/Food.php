<?php

namespace Arcoders;

class Food extends Model {

    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ?? false;
    }

}
