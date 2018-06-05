<?php

namespace classes\vehicle;

use classes\fuel\AbstractFuelType;

abstract class AbstractVehicle
{
	public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

	public function refuel(AbstractFuelType $fuel) : string
	{
		return $this->name . ' refuel ' . $fuel::getFuelType();
	}
}
