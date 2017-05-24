<?php

namespace Arcoders;

class User extends Model
{

    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function getLastNameAttribute($value)
    {
        return strtolower($value);
    }

    public function getNickNameAttribute($value)
    {
        return str_replace($value, '...', $value);
    }

}
