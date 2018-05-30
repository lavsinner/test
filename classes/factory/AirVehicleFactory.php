<?php

namespace classes\factory;

use classes\vehicle\AbstractVehicle;
use classes\vehicle\AirVehicle;

class AirVehicleFactory extends AbstractFactory
{
	public function createVehicle(string $name) : AbstractVehicle
	{
		return new AirVehicle($name);
	}
}
