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

    use CanPerformBasicActions, CanRide {
        CanRide::move insteadof CanPerformBasicActions;
        CanRide::move as ride;
        CanPerformBasicActions::move as basicMove;
    }

}

$archer = new Archer();
$archer->shootArrow();

$MountedArcher = new MountedArcher();
$MountedArcher->basicMove();
$MountedArcher->ride();
