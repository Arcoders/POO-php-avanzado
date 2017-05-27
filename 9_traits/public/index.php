<?php

trait CanShootArrows
{

    public function shootArrow()
    {
        echo '<p>Disparó una flecha</p>';
    }

}

trait canRide
{

    public function ride()
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

    public function walk()
    {
        echo '<p>Caminó</p>';
    }

}

class MountedArcher
{

    use CanRide, CanShootArrows;

}

$archer = new Archer();
$archer->shootArrow();

$MountedArcher = new MountedArcher();
$MountedArcher->shootArrow();
$MountedArcher->ride();
