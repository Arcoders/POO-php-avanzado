<?php

namespace Arcoders;

class User extends Model
{

    protected $lunch;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->lunch = new LunchBox();
    }

    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }

    public function eat()
    {
        if ($this->lunch->isEmpty()) {
            exit("{$this->name} no tiene nada para comer :/");
        }

        echo "<p>{$this->name} almuerza {$this->lunch->shift()}</p>";
    }

    public function eatMeal()
    {
        foreach ($this->lunch as $food) {
            echo "<p>{$this->name} eats {$food}</p>";
        }
    }

}
