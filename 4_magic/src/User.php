<?php

namespace Arcoders;

class User extends Model
{

    public $id = 5;
    public $table = 'users';
    private $dbPassword = 'secret';

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function getNickNameAttribute($value)
    {
        return str_replace($value, '...', $value);
    }

    public function __toString()
    {
        return $this->name;
    }

    public function __sleep()
    {
        return ['attributes', 'table'];
    }

    public function __wakeup()
    {
        $this->attributes['name'] = 'Mr . ' . $this->attributes['name'];
    }

}
