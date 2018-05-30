<?php

namespace classes\vehicle;

use AirActionInterface;

class AirVehicle extends AbstractVehicle implements AirActionInterface
{
    public function takeOff(): string
    {
        return $this->name . ' tool off';
    }

    public function fly(): string
    {
        return $this->name . ' flying';
    }

    public function land(): string
    {
        return $this->name . ' landing';
    }
}