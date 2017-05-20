<?php

class Person {

    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName() {
        return $this->firstName. ' ' .$this->lastName;
    }

}

$persona_uno = new Person('Victor', 'Ruvira');

$persona_dos = new Person('Marta', 'Lopez');

echo "{$persona_uno->fullName()} es amigo de {$persona_dos->fullName()}";
