<?php

namespace classes\vehicle;

use LoadActionInterface;
use MoveActionInterface;

class HeavyLandVehicle extends AbstractVehicle implements MoveActionInterface, LoadActionInterface
{
    public function move() : string
    {
        return $this->name . ' moving';
    }

    public function stop() : string
    {
        return $this->name . ' stopped';
    }

    public function emptyLoads() : string
    {
        return $this->name . ' has emptied loads';
    }
}