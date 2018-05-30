<?php

namespace classes\vehicle;

use MoveActionInterface;
use SwimActionInterface;

class SeaVehicle extends AbstractVehicle implements MoveActionInterface, SwimActionInterface
{
    public function move() : string
    {
        return $this->name . ' moving';
    }

    public function stop() : string
    {
        return $this->name . ' stopped';
    }

    public function swim(): string
    {
        return $this->name . ' swimming';
    }
}
