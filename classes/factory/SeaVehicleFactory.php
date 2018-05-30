<?php

namespace classes\factory;

use classes\vehicle\AbstractVehicle;
use classes\vehicle\SeaVehicle;

class SeaVehicleFactory extends AbstractFactory
{
	public function createVehicle(string $vehicle) : AbstractVehicle
	{
		return new SeaVehicle($vehicle);
	}
}