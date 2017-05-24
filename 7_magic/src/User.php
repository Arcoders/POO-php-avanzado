<?php

namespace Arcoders;

class User extends Model
{

    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }

}
