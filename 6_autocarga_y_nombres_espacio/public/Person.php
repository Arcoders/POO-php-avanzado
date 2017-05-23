<?php

namespace Arcoders;

class Person
{

    protected $name;

    public $table = 'people';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function save()
    {
        echo "<p>Saving {$this->name} in the table {$this->table}</p>";
    }

}

$ismael = new Person('Ismael');
$ismael->table = 'personas';
$ismael->save();

$haytam = new Person('Haytam');
$haytam->save();

echo "<p>{$ismael->name()}</p>";
echo "<p>{$haytam->name()}</p>";
