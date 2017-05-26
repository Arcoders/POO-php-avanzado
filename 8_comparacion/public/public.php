<?php

class Person {

    public $id;
    public $name;
    public $online = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function is($otherPerson)
    {
        return $this->id == $otherPerson->id;
    }

}

$ismael = new Person('Ismael Haytam');
$ismael->online = true;
$ismael->id = 1;

$haytam = new Person('Ismael Haytam');
$haytam->id = 1;

echo ($ismael->is($haytam)) ? 'true ^^' : 'false :/';

// auth()->user()->id == User::findOrFail(1)->id;
