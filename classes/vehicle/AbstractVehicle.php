<?php

namespace classes\vehicle;

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
