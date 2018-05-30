<?php

namespace classes\factory;

use classes\vehicle\AbstractVehicle;
use classes\vehicle\LandVehicle;

class LandVehicleFactory extends AbstractFactory
{
	public function createVehicle(string $vehicle) : AbstractVehicle
	{
		return new LandVehicle($vehicle);
	}
}