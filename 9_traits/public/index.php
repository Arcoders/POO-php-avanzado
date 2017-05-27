<?php

trait CanPerformBasicActions
{

    public function move()
    {
        echo '<p>Caminó</p>';
    }

}

trait CanShootArrows
{

    public function shootArrow()
    {
        echo '<p>Disparó una flecha</p>';
    }

    abstract public function getArrows()
    {
        return $this->arrows ?? 50;
    }

}

trait canRide
{

    public function move()
    {
        echo '<p>Cabalgó</p>';
    }

}

class Knight
{

    use CanRide;

}

class Archer
{

    use CanShootArrows;

}

class MountedArcher
{

    public $arrows = 70;

    use CanShootArrows, CanRide;

}

$MountedArcher = new MountedArcher();
$MountedArcher->shootArrow();

echo "<p>{$MountedArcher->getArrows()}</p>";
